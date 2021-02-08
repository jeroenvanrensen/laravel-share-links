<?php

namespace JeroenvanRensen\ShareLinks\Tests;

use JeroenvanRensen\ShareLinks\ShareLinksServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [ShareLinksServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        //
    }
}
