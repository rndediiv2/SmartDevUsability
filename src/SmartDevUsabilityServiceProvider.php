<?php

namespace rndediiv2\SmartDevUsability;

use Illuminate\Support\ServiceProvider;

class SmartDevUsabilityServiceProvider extends ServiceProvider 
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

     public function boot()
     {

     }

     /**
     * Register the application services.
     *
     * @return void
     */
     public function register()
     {
         $this->app-bind('SmartDevUsability', function($app){
             return new SmartDevUsability;
         });
     }
}