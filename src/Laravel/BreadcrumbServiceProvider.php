<?php

namespace Dluwang\Breadcrumb\Laravel;

use Illuminate\Support\ServiceProvider;
use Dluwang\Breadcrumb\Breadcrumb;
use Dluwang\Breadcrumb\InMemoryBreadcrumb;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register service provider
     *
     * @return void
     */
    public function register() {
        $this->app->singleton(Breadcrumb::class, function($app) {
            return new InMemoryBreadcrumb();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Breadcrumb::class];
    }
}
