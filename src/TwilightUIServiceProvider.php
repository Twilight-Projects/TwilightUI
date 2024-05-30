<?php

namespace TwilightProjects\TwilightUI;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TwilightProjects\TwilightUI\Views\Components\Button;
use TwilightProjects\TwilightUI\Views\Components\Input;

class TwilightUIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('twilightui')
            ->hasConfigFile()
            ->hasViews();

        Blade::component("button", Button::class);

        Blade::component("input", Input::class);
    }
}
