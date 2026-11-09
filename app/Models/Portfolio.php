<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Format;
use Intervention\Image\ImageManager;

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

    protected array $filesToDelete = [];

    protected static function booted()
    {
        static::creating(function (Portfolio $portfolio) {
            $baseSlug = Str::slug($portfolio->name);
            $slug = $baseSlug;
            $count = 1;

            while (self::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $count;
                $count++;
            }

            $portfolio->slug = $slug;
        });

        static::updating(function (Portfolio $portfolio) {
            if ($portfolio->isDirty('name')) {
                $baseSlug = Str::slug($portfolio->name);
                $slug = $baseSlug;
                $count = 1;

                while (
                    self::where('slug', $slug)
                        ->where('id', '!=', $portfolio->id)
                        ->exists()
                ) {
                    $slug = $baseSlug . '-' . $count;
                    $count++;
                }

                $portfolio->slug = $slug;
            }
        });

        static::saving(function (Portfolio $portfolio) {
            $disk = Storage::disk('public');

            $imageSettings = [
                'thumbnail' => [
                    'width' => 1280,
                    'height' => 720,
                    'quality' => 90,
                ],
                'preview_image' => [
                    'width' => 1920,
                    'quality' => 90,
                ],
            ];

            $manager = ImageManager::usingDriver(Driver::class);

            foreach ($imageSettings as $field => $settings) {
                if (! $portfolio->isDirty($field)) {
                    continue;
                }

                $sourcePath = $portfolio->{$field};

                if (! $sourcePath) {
                    continue;
                }

                if (! $disk->exists($sourcePath)) {
                    continue;
                }

                try {
                    $image = $manager->decode(
                        $disk->get($sourcePath)
                    );

                    if ($field === 'thumbnail') {
                        $image->cover(
                            width: $settings['width'],
                            height: $settings['height']
                        );
                    } else {
                        $image->scale(width: $settings['width']);
                    }

                    $encoded = $image->encodeUsingFormat(
                        Format::WEBP,
                        quality: $settings['quality']
                    );

                    $newPath = 'portfolio_optimized/'
                        . $field . '/'
                        . Str::uuid()
                        . '.webp';

                    $disk->put($newPath, (string) $encoded);

                    $portfolio->filesToDelete[] = $sourcePath;

                    $oldPath = $portfolio->getOriginal($field);

                    if ($oldPath && $oldPath !== $sourcePath) {
                        $portfolio->filesToDelete[] = $oldPath;
                    }

                    $portfolio->{$field} = $newPath;
                } catch (\Throwable $e) {
                    Log::error(
                        "Gagal mengoptimasi {$field} portfolio: "
                        . $e->getMessage()
                    );

                    throw $e;
                }
            }
        });

        static::saved(function (Portfolio $portfolio) {
            $currentPaths = [
                $portfolio->thumbnail,
                $portfolio->preview_image,
            ];

            foreach (array_unique($portfolio->filesToDelete) as $path) {
                if (
                    $path &&
                    ! in_array($path, $currentPaths, true)
                ) {
                    Storage::disk('public')->delete($path);
                }
            }

            $portfolio->filesToDelete = [];

            static::regenerateSitemap();
        });

        static::deleting(function (Portfolio $portfolio) {
            foreach (['thumbnail', 'preview_image'] as $field) {
                $path = $portfolio->{$field};

                if ($path) {
                    $portfolio->filesToDelete[] = $path;
                }
            }
        });

        static::deleted(function (Portfolio $portfolio) {
            foreach (array_unique($portfolio->filesToDelete) as $path) {
                if ($path) {
                    Storage::disk('public')->delete($path);
                }
            }

            $portfolio->filesToDelete = [];

            static::regenerateSitemap();
        });
    }

    protected static function regenerateSitemap(): void
    {
        try {
            Artisan::call('app:generate-sitemap');
        } catch (\Throwable $e) {
            Log::error(
                'Gagal generate sitemap: ' . $e->getMessage()
            );
        }
    }

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'category_id');
    }
}