<?php

namespace Djmitry\Sitemap;

use Illuminate\Support\ServiceProvider;

class SitemapServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'Sitemap');
        $this->publishes([
            __DIR__ . '/config/sitemap.php' => config_path('sitemap.php'),
        ]);
    }
}