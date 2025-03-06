<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('generate:sitemap', function () {
    \Spatie\Sitemap\SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));
    $this->info('Sitemap generated successfully.');
})->purpose('Generate the sitemap for the website');

$schedule = app(Schedule::class);
$schedule->command('generate:sitemap')->daily();


