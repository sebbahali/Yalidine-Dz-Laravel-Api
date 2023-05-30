<?php

namespace Sebbahnouri\Yalidine\Providers;

use Illuminate\Support\ServiceProvider;
use Sebbahnouri\Yalidine\Yalidine;

class YaledineServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Config/Yale.php' => config_path('Yale.php'),
        ], 'Yale-config');
    }

    public function register()
    {
        $this->app->singleton(Yalidine::class, function(){
            return new Yalidine();
        });
    }
}
