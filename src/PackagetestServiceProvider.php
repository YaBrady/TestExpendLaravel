<?php

namespace YaBrady\Packagetest;

use Illuminate\Support\ServiceProvider;

class PackagetestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->loadViewsFrom(__DIR__.'/views', 'Pat');
        $this->publishes([
            __DIR__.'/views'          =>base_path('resources/views/vendor/packagetest'),
            __DIR__ . '/config/packagetest.php' =>config_path('packagetest.php')
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        $this->mergeConfigFrom(
//            __DIR__.'/config/packagetest.php','packagetest'
//        );
        $this->app->singleton('packagetest', function ($app){
            return new Packagetest($app);
        });
    }

}
