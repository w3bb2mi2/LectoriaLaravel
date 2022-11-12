<?php
namespace App\Providers;

use Illuminate\Routing\RoutingServiceProvider;
use App\Http\Routing\Router;

class MyRoutingServiceProvider extends RoutingServiceProvider{
    protected function registerRouter()
    {
        $this->app->singleton('router', function ($app) {
            //dd($app['events']);
            return new Router($app['events'], $app);
        });
    }

}