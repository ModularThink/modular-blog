<?php

namespace Modular\Blog\Tests;

use Modular\Blog\BlogServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class TestCase extends Orchestra
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            BlogServiceProvider::class,
        ];
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadMigrationsFrom(base_path('database/migrations'));
        // $this->loadMigrationsFrom(__DIR__ . '/../stubs/modules/Blog/Database/Migrations');
    }
}
