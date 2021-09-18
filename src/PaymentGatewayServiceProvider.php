<?php

namespace Sparkouttech\PaymentGateway;

use Illuminate\Support\ServiceProvider;

class PaymentGatewayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
         $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'payment-gateway');
         $this->loadViewsFrom(__DIR__.'/resources/views', 'payment-gateway');
         $this->loadMigrationsFrom(__DIR__.'/database/migrations');
         $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/config/payment-gateway.php' => config_path('payment-gateway.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/resources/views' => resource_path('views/vendor/test-pay'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/resources/assets' => public_path('vendor/test-pay'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/resources/lang' => resource_path('lang/vendor/test-pay'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/config/payment-gateway.php', 'payment-gateway');

        // Register the main class to use with the facade
        $this->app->singleton('payment-gateway', function () {
            return new PaymentGateway;
        });
    }
}
