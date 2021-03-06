<?php
namespace GGuney\Barista;

use Illuminate\Support\ServiceProvider;

class BaristaServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Publish/config/barista.php', 'barista');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Publish/config/barista.php' => config_path('barista.php'),
        ]);

        $this->publishes([
            __DIR__ . '/Publish/lang/barista.php' => resource_path('lang/en/barista.php'),
        ]);
    }

}
