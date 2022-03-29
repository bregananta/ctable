<?php

namespace Bregananta\ClosureTable;

use Bregananta\ClosureTable\Commands\ClosureTableCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ClosureTableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('closure-table')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_closure-table_table')
            ->hasCommand(ClosureTableCommand::class);
    }
}
