<?php

namespace App\Providers;

use App\Libs\HandleRequest;
use Illuminate\Support\ServiceProvider;

class FacadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('handle_request', function () {
            return new HandleRequest();
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
