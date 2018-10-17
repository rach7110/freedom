<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ImageRecognitionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\ImageRecognitionInterface',
            'App\Services\ImageRecognition\ClarifaiApiService'
        );
    }
}
