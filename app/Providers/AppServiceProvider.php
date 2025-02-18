<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::component('card-component', \App\View\Components\card::class);
        Blade::component('mediaSection', \App\View\Components\mediaSection::class);
        Blade::component('descriptionSection', \App\View\Components\descriptionSection::class);
        Blade::component('skeleton', \App\View\Components\Skeleton::class);
        Blade::component('lazyImage', \App\View\Components\LazyImage::class);
    }
}
