<?php

namespace Modules\TempahanKenderaan\Providers;

use Illuminate\Support\ServiceProvider;

class TempahanKenderaanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__.'/../Config/config.php', 'tempahan_kenderaan');
    }
}
