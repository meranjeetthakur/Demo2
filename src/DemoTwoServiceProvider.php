<?php

namespace ShoutLara\DemoTwo;

use Illuminate\Support\ServiceProvider;
use ShoutLara\DemoTwo\Services\DemoTwo;
class DemoTwoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('ShoutLara\DemoTwo\DemoTwoController');
        $this->app->bind('demotwo', function () 
        {
            return new DemoTwo();
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
