<?php

namespace Kangangga\Pcare;

use Spatie\LaravelPackageTools\Package;
use Kangangga\Pcare\Commands\PcareCommand;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PcareServiceProvider extends PackageServiceProvider
{
    public function registeringPackage()
    {
        $this->app->singleton('pcare', function ($app) {
            return new Pcare($app);
        });
    }

    public function packageRegistered()
    {
        #code
    }

    public function bootingPackage()
    {
        #code
    }

    public function packageBooted()
    {
        #code
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-pcare')
            ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_laravel-pcare_table')
            ->hasCommand(PcareCommand::class);
    }
}
