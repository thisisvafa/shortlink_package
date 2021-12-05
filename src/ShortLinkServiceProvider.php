<?php

namespace Vafancy\ShortLink;
use Illuminate\Support\ServiceProvider;

class ShortLinkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','shortlink');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/shortLink.php','shortLink');
        $this->publishes([
            __DIR__.'/config/shortLink.php' => config_path('shortLink.php')
        ]);
    }

    public function register()
    {

    }
}
