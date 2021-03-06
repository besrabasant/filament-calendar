<?php

namespace Filament\Calendar\Providers;


use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCalendarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-calendar')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations();
    }

    public function packageRegistered()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/filament-calendar.php', 'filament-calendar');
    }

    public function packageBooted()
    {
        $this->bootLivewireComponents();
    }

    protected function bootLivewireComponents(): void
    {

    }
}
