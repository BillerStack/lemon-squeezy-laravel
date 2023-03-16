<?php

namespace BillerStack\LemonSqueezyLaravel;

use BillerStack\LemonSqueezyLaravel\Commands\LemonSqueezyLaravelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LemonSqueezyLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lemon-squeezy-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lemon-squeezy-laravel_table')
            ->hasCommand(LemonSqueezyLaravelCommand::class);
    }
}
