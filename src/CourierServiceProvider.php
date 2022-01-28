<?php

namespace Slashequip\CourierLaravel;

use Courier\CourierClient;
use Courier\CourierClientInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CourierServiceProvider extends PackageServiceProvider implements DeferrableProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('courier')
            ->hasConfigFile();

        $this->app->bind(CourierClientInterface::class, function ($app) {
            $config = $app->make('config');

            return new CourierClient(
                $config->get('courier.base_url'),
                $config->get('courier.api_key'),
                $config->get('courier.username'),
                $config->get('courier.password'),
            );
        });

        $this->app->alias(CourierClientInterface::class, 'courier');
    }

    public function provides()
    {
        return [
            CourierClientInterface::class,
            'courier',
        ];
    }
}
