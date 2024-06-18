<?php

namespace RobinThijsen\ComponentForm;

use Illuminate\Support\Facades\Blade;
use RobinThijsen\ComponentForm\Commands\ComponentFormCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ComponentFormServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('component-form')
            ->hasViews();
    }

    public function packageBooted(): void
    {
        parent::packageBooted();

        Blade::componentNamespace('RobinThijsen\\ComponentForm\\View', 'component-form');
    }
}