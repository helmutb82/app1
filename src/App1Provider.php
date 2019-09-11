<?php

namespace Helmutb\App1;

use Illuminate\Support\ServiceProvider;

class App1Provider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App1', function($app) {
            return new App1();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
