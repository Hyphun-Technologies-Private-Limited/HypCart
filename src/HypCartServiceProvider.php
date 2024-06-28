<?php

namespace Hyphun\HypCart;
use Illuminate\Support\ServiceProvider;

class HypCartServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'hypcart');
    }

    public function register()
    {
        //
    }
}
