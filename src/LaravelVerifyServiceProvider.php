<?php

namespace Redberry\LaravelVerify;

use Redberry\LaravelVerify\Commands\LaravelVerifyCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelVerifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-verify')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-verify_table')
            ->hasCommand(LaravelVerifyCommand::class);
    }
}
