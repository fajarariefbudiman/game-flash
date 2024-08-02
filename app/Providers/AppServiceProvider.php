<?php

namespace App\Providers;

use App\Models\Association;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Observers\AssociationObserver;
use App\Observers\PlayerObserver;
use App\Observers\TeamObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrapFive();
        Association::observe(AssociationObserver::class);
        Player::observe(PlayerObserver::class);
        Team::observe(TeamObserver::class);
    }
}
