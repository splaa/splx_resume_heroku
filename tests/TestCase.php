<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Bootstrap\LoadConfiguration;
use Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();
        $this->clearCache();

        $app->make(LoadEnvironmentVariables::class)->bootstrap($app);
        $app->make(LoadConfiguration::class)->bootstrap($app);

        return $app;
    }

    protected function clearCache()
    {
        $commands = ['clear-compiled', 'cache:clear', 'view:clear', 'route:clear'];
        foreach ($commands as $command) {
            Artisan::call($command);
        }
    }
}
