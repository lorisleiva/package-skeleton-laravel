<?php

namespace Lorisleiva\Skeleton\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Lorisleiva\Skeleton\SkeletonServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            SkeletonServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        //
    }
}
