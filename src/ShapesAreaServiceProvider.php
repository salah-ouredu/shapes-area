<?php

namespace Spatie\ShapesArea;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\ShapesArea\Commands\ShapesAreaCommand;

class ShapesAreaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('shapes-area')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_shapes_area_table')
            ->hasCommand(ShapesAreaCommand::class);
    }
}
