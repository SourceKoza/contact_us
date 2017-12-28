<?php

namespace Pandey\Timezone;

use Illuminate\Support\ServiceProvider;


class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'Timezone');
		 $this->publishes([
        __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
    ], 'migrations');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routs.php';
        $this->app->make('Pandey\Timezone\MytimeController');
    }
}
