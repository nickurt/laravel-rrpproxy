<?php

namespace nickurt\RrpProxy;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/rrpproxy.php' => config_path('rrpproxy.php')
        ], 'config');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['nickurt\RrpProxy\RrpProxy', 'RrpProxy'];
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('nickurt\RrpProxy\RrpProxy', function ($app) {
            $rrp = new RrpProxy($app);
            $rrp->connection($rrp->getDefaultConnection());

            return $rrp;
        });

        $this->app->alias('nickurt\RrpProxy\RrpProxy', 'RrpProxy');
    }
}
