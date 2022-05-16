<?php

namespace Westreels\WestreelsMain;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Westreels\WestreelsMain\Commands\WestreelsMainCommand;


class WestreelsMainServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('westreels-main')
            ->hasMigrations(['create_westreels_gamesessions_table', 'create_westreels_gamelist_pragmatic_table', 'modify_users_table'])
            ->hasConfigFile(['westreels-main', 'gameconfig'])
            ->hasViews('westreels')
            ->hasRoutes(['web', 'api'])
            ->hasCommand(WestreelsMainCommand::class);
    }
}
