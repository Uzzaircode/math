<?php

namespace Uzzaircode\Math;

use Illuminate\Support\ServiceProvider;

class MathServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {   
        $this->app->singleton(Math::class, function () {
            return new Math();
        });
        $this->app->alias(Math::class, 'math');
        include __DIR__.'/routes/web.php';
        $this->app->make('Uzzaircode\Math\MathController');
    }
}
