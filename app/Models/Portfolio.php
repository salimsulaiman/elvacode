<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'preview_image',
        'summary',
        'content',
        'category_id',
    ];

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

        // Hapus file lama saat thumbnail / preview_image diganti
        static::updating(function (Portfolio $portfolio) {
            foreach (['thumbnail', 'preview_image'] as $field) {
                if ($portfolio->isDirty($field)) {
                    $old = $portfolio->getOriginal($field);
                    if ($old) {
                        Storage::disk('public')->delete($old);
                    }
                }
            }
        });

        // Hapus semua file saat portfolio dihapus
        static::deleting(function (Portfolio $portfolio) {
            foreach (['thumbnail', 'preview_image'] as $field) {
                if ($portfolio->{$field}) {
                    Storage::disk('public')->delete($portfolio->{$field});
                }
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