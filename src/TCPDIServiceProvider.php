<?php

namespace Jeylabs\TCPDI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container as Application;

class TCPDIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $source = __DIR__ . '/config/tcpdi.php';
        $this->publishes([$source => config_path('tcpdi.php')]);
        $this->mergeConfigFrom($source, 'tcpdi');
    }

    public function register()
    {
        $this->registerBindings($this->app);
    }

    protected function registerBindings(Application $app)
    {
        $app->singleton('tcpdi', function ($app) {
            return new PDF();
        });
        $app->alias('tcpdi', PDF::class);
    }
}
