<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Portfolio;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml for the website';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating sitemap...');

        $sitemap = Sitemap::create();

        // Halaman statis
        $staticPages = [
            ['url' => '/', 'priority' => 1.0, 'freq' => 'daily'],
            ['url' => '/about', 'priority' => 0.8, 'freq' => 'monthly'],
            ['url' => '/service/pricing', 'priority' => 0.8, 'freq' => 'monthly'],
            ['url' => '/service/order-guide', 'priority' => 0.8, 'freq' => 'monthly'],
            ['url' => '/contact', 'priority' => 0.7, 'freq' => 'monthly'],
            ['url' => '/privacy-policy', 'priority' => 0.5, 'freq' => 'yearly'],
        ];

        foreach ($staticPages as $page) {
            $sitemap->add(
                Url::create($page['url'])
                    ->setPriority($page['priority'])
                    ->setChangeFrequency($page['freq'])
            );
        }

        // Artikel dinamis
        Article::where('status', 'published')->get()->each(function ($article) use ($sitemap) {
            $sitemap->add(
                Url::create("/article/{$article->slug}")
                    ->setLastModificationDate($article->updated_at)
                    ->setPriority(0.9)
                    ->setChangeFrequency('weekly')
            );
        });

        Portfolio::all()->each(function ($portfolio) use ($sitemap) {
            $sitemap->add(
                Url::create("/portfolio/{$portfolio->slug}")
                    ->setLastModificationDate($portfolio->updated_at)
                    ->setPriority(0.8)
                    ->setChangeFrequency('weekly')
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap berhasil dibuat di public/sitemap.xml');
    }
}
