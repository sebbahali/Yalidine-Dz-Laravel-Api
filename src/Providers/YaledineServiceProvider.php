<?php

namespace Sebbahnouri\Yalidine\Providers;
use Illuminate\Support\Facades\Config;

use Illuminate\Support\ServiceProvider;

class YaledineServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Yale.php' => config_path('Yale.php'),
        ], 'Yale-config');
    }

    public function register()
    {
        // Register any package-specific bindings or services
    }
}
