<?php

namespace Abzudev\LaravelCacheClear;

use Illuminate\Support\ServiceProvider;

class CacheClearServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'cache');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

}
