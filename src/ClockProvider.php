<?php

namespace Clock\ClockProv;
/**
 *  ADD  namespace in composer.json  in  autoload > psr-4 
 *   "Clock\\ClockProv\\" : "packages/clock/src/"
 * >> composer dump-autoload
 *  vendor > classperloader
 *  vendor > commposer > autoload_classmap
 */

use Illuminate\Support\ServiceProvider;
use Clock\ClockProv\Clock;
/**
 * Create Package 
 * php artisan make:provider ClockProvider
 */
class ClockProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //app()->singleton
        // Deprcate
        // $this->app['clock'] = $this->app->share(function ()
        // {
        //     return new Clock;
        // });
        $this->app['clock'] =  $this->app->singleton(Clock::class, function ($app) {
            return new Clock;
       });
    }

    /**
     * Bootstrap services.
     * using to move file from anywere to config
     * @return void
     */
    public function boot()
    {
        // Move The File set_clock to config folder 
        if (!file_exists(base_path('config').'/set_clock.php')) {
            $this->publishes([__DIR__.'/tools' => base_path('config')]);
        }
        /** 
         *  ADD  path in ClockProvider in  config >app.php >provider
         *  
         *  >> php artisan vendor:publish
         * */ 


        // Move The File map.blade.php to resources.views folder 
        if (!file_exists(base_path('resources/views').'/map.blade.php')) {
            $this->publishes([__DIR__.'/blades' => base_path('resources/views')]);
        }
        /** 
         *  ADD  path in ClockProvider in  config >app.php >provider
         *  
         *  >> php artisan vendor:publish
         * */ 
    }
}
