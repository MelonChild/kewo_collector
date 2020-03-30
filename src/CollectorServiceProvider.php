<?php

namespace Kewo\Collector;

use Illuminate\Support\ServiceProvider;

class CollectorServiceProvider extends ServiceProvider
{
    /**
     * Service provider deferred loading
     * 
     * @var bool
     */
    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // singleton binder
        $this->app->singleton('collector',function($app){
            return new Collector($app['session'],$app['config']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // view files folder
        $this->loadViewsFrom(__DIR__.'/views','Collector');
        
        $this->publishes([
            __DIR__.'/resources' => base_path('public/vendor/collecter'),
            __DIR__.'/views' => base_path('resources/views/vendor/collecter'),// publish the folder under to resources
            __DIR__.'/config/collector.php' => config_path('collector.php') // publish the configuration under to config
        ]);
    }

    /**
     * Get the service provided by the provider
     * 
     * @return array
     */
    public function provides()
    {
        return ['collector'];
    }
}
