<?php

namespace Kanekescom\Siasn\Perencanaan\Tests;

use Kanekescom\Siasn\Perencanaan\PerencanaanServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            PerencanaanServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        //
    }
}
