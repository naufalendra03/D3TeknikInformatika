<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::serving(function () {
            Filament::auth()->check(function ($user) {
                return $user->role === 'admin'; // Pastikan hanya admin yang bisa mengakses Filament
            });
        });
    }

    public function register()
    {
        //
    }
}
