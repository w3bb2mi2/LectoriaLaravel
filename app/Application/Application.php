<?php

namespace App\Application;

use App\Providers\EventServiceProvider;
use Illuminate\Foundation\Application as BaseApplication;
use Illuminate\Log\LogServiceProvider;
// use Illuminate\Routing\RoutingServiceProvider;

use App\Providers\MyRoutingServiceProvider as RoutingServiceProvider;

class Application extends BaseApplication
{
    
    // public function registerBaseServiceProviders()
    // {
       
    //     $this->register(new EventServiceProvider($this));
    //     $this->register(new LogServiceProvider($this));
    //     $this->register(new RoutingServiceProvider($this));
    // }
}


