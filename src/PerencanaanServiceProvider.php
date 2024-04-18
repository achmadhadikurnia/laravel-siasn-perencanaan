<?php

namespace Kanekescom\Siasn\Perencanaan;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PerencanaanServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-siasn-perencanaan')
            ->hasConfigFile()
            ->hasMigrations([
                '2024_01_01_000001_create_siasn_perencanaan_rincian_formasi_table',
                '2024_01_01_000002_create_siasn_perencanaan_formasi_k2_table',
            ])
            ->runsMigrations()
            ->hasCommands([
                Commands\ImportRincianFormasiCommand::class,
                Commands\ImportFormasiK2Command::class,
            ])
            ->hasInstallCommand(function ($command) {
                $command
                    ->startWith(function ($command) {
                        $command->info('Hello, and welcome to my great laravel package!');
                    })
                    ->publishConfigFile()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('kanekescom/laravel-siasn-perencanaan')
                    ->endWith(function ($command) {
                        $command->info('Have a great day!');
                    });
            });
    }
}
