<?php

namespace AdoreBeauty\GoogleSignIn;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AdoreBeauty\GoogleSignIn\Commands\GoogleSignInCommand;

class GoogleSignInServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('google-signin')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_google-signin_table')
            ->hasCommand(GoogleSignInCommand::class);
    }
}
