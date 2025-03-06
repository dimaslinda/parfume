<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    protected $signature = 'generate:sitemap';
    protected $description = 'Generate the sitemap for the website';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));
        $this->info('Sitemap generated successfully.');
    }
}
