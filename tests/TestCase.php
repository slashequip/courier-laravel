<?php

namespace Slashequip\CourierLaravel\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Slashequip\CourierLaravel\CourierServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            CourierServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        //
    }
}
