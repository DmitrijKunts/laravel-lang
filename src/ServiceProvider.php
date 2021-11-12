<?php

namespace DmitrijKunts\LaravelLang;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
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
        $this->loadTranslationsFrom(__DIR__ . '/../langs', '');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../langs');

        // $this->publishes([
        //     __DIR__ . '/../langs' => resource_path('lang'),
        // ]);
    }
}
