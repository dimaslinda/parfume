<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Claims;
use App\Observers\ClaimsObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Claims::observe(ClaimsObserver::class);
    }
}
