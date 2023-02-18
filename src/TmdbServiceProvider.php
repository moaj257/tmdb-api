<?php

namespace Moaj257\TmdbApi;

use Illuminate\Support\ServiceProvider;
use Moaj257\TmdbApi\Common\ApiGenerator;

class TmdbServiceProvider extends ServiceProvider {
    /** 
     * Bootstrap the application services.
     * 
     * @return void
     */
    public function boot() {
        $this->mergeConfigFrom(__DIR__ . '/config/tmdb.php', 'tmdb');
        $this->publishes([__DIR__.'/../config/tmdb.php' => config_path('tmdb.php')], 'tmdb-config');
    }

    /** 
     * Register the application services.
     * 
     * @return void
     */
    public function register() {
        $this->app->bind(ApiGenerator::class, function () {
            return new ApiGenerator(config('tmdb.endpoint'), config('tmdb.key'), config('tmdb.lang'));
        });
        
        $this->app->bind('TmdbApi', TmdbApi::class);
    }
}