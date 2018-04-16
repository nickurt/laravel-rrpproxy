<?php

namespace nickurt\RrpProxy;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

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

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../src/Resources/Lang', 'rrpproxy');

        $this->publishes([
            __DIR__.'/../src/Resources/Lang' => resource_path('lang/vendor/rrpproxy'),
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
}
