<?php

namespace YourVendor\NidaFooter\Providers;

use Illuminate\Support\ServiceProvider;

class NidaFooterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Merge config
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/nida-footer.php', 'nida-footer'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Load views
        $this->loadViewsFrom(__DIR__ . '/../Views', 'nida-footer');

        // Publish views
        $this->publishes([
            __DIR__ . '/../Views' => resource_path('views/vendor/nida-footer'),
        ], 'nida-footer-views');

        // Publish assets
        $this->publishes([
            __DIR__ . '/../Assets' => public_path('vendor/nida-footer'),
        ], 'nida-footer-assets');

        // Publish config
        $this->publishes([
            __DIR__ . '/../Config/nida-footer.php' => config_path('nida-footer.php'),
        ], 'nida-footer-config');
    }
}