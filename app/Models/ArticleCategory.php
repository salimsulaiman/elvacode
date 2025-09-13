<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ArticleCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'text_color',
        'background_color'
    ];

    protected static function booted()
    {
        static::creating(function ($category) {
            $baseSlug = Str::slug($category->name);
            $slug = $baseSlug;
            $count = 1;

            while (self::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $count;
                $count++;
            }

            $category->slug = $slug;
        });
        static::updating(function ($category) {
            if ($category->isDirty('name')) {
                $baseSlug = Str::slug($category->name);
                $slug = $baseSlug;
                $count = 1;

                while (self::where('slug', $slug)
                    ->where('id', '!=', $category->id)
                    ->exists()
                ) {
                    $slug = $baseSlug . '-' . $count;
                    $count++;
                }

                $category->slug = $slug;
            }
        });
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'category_id');
    }
}
