<?php

namespace Ui\Component;

use Illuminate\Support\ServiceProvider;

class InterfaceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'ui');
        $this->mergeConfigFrom(
            __DIR__ . '/config/data.php',
            'data'
        );

        $this->publishes([
            __DIR__ . '/config/data.php' => config_path('data.php'),
            __DIR__ . '/views' => resource_path('views/'),
            __DIR__ . '/public' => public_path('vendor/'),

        ]);
    }
}
