<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Humaninterface;
use App\Humanmodel;
class HumanService extends ServiceProvider
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
        $this->app->bind('App\\Humaninterface','App\\Humanmodel');
    }
}
