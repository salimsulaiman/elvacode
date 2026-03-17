<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'thumbnail',
        'category_id',
        'author_id',
        'status',
        'is_featured',
        'published_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function getPublishedDateAttribute()
    {
        return $this->published_at
            ? Carbon::parse($this->published_at)->translatedFormat('d M Y')
            : null;
    }

    protected static function booted()
    {
        static::creating(function ($article) {
            if (empty($article->slug)) {
                $slug = Str::slug($article->title);
                $count = static::where('slug', 'LIKE', "{$slug}%")->count();
                $article->slug = $count ? "{$slug}-{$count}" : $slug;
            }
        });

        static::updating(function ($article) {
            if ($article->isDirty('title') && empty($article->slug)) {
                $baseSlug = Str::slug($article->title);
                $count = static::where('slug', 'LIKE', "{$baseSlug}%")
                    ->where('id', '!=', $article->id)
                    ->count();
                $article->slug = $count ? "{$baseSlug}-{$count}" : $baseSlug;
            }
        });

        static::updating(function (Article $article) {
            if ($article->isDirty('thumbnail')) {
                $oldThumbnail = $article->getOriginal('thumbnail');
                if ($oldThumbnail) {
                    Storage::disk('public')->delete($oldThumbnail);
                }
            }
        });

        static::deleting(function (Article $article) {
            if ($article->thumbnail) {
                Storage::disk('public')->delete($article->thumbnail);
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now());
    }
}