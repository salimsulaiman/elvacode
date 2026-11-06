<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class Portfolio extends Model
{
    protected $fillable = ['name', 'slug', 'thumbnail', 'summary', 'content', 'category_id'];

    protected static function booted()
    {
        static::creating(function ($portfolio) {
            $baseSlug = Str::slug($portfolio->name);
            $slug = $baseSlug;
            $count = 1;

            while (self::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $count;
                $count++;
            }

            $portfolio->slug = $slug;
        });

        static::updating(function ($portfolio) {
            if ($portfolio->isDirty('name')) {
                $baseSlug = Str::slug($portfolio->name);
                $slug = $baseSlug;
                $count = 1;

                while (self::where('slug', $slug)
                    ->where('id', '!=', $portfolio->id)
                    ->exists()
                ) {
                    $slug = $baseSlug . '-' . $count;
                    $count++;
                }

                $portfolio->slug = $slug;
            }
        });

        static::updating(function (Portfolio $article) {
            if ($article->isDirty('thumbnail')) {
                $oldThumbnail = $article->getOriginal('thumbnail');
                if ($oldThumbnail) {
                    Storage::disk('public')->delete($oldThumbnail);
                }
            }
        });

        static::deleting(function (Portfolio $portfolio) {
            if ($portfolio->thumbnail) {
                Storage::disk('public')->delete($portfolio->thumbnail);
            }
        });

        static::saved(function () {
            static::regenerateSitemap();
        });

        static::deleted(function () {
            static::regenerateSitemap();
        });
    }

    protected static function regenerateSitemap(): void
    {
        try {
            Artisan::call('app:generate-sitemap');
        } catch (\Throwable $e) {
            Log::error('Gagal generate sitemap: ' . $e->getMessage());
        }
    }

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'category_id');
    }
}