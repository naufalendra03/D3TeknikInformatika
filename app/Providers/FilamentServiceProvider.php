<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Define custom navigation
        Filament::navigation(function ($navigation) {
            return [
                // Top-level navigation item
                \Filament\Navigation\NavigationItem::make('Dashboard')
                    ->icon('heroicon-o-home')
                    ->url(route('dashboard')), // Ensure this route exists

                // Grouping items under "Halaman"
                \Filament\Navigation\NavigationGroup::make('Halaman')
                    ->icon('heroicon-o-document')
                    ->items([
                        \Filament\Navigation\NavigationItem::make('Mahasiswa')
                            ->icon('heroicon-o-user')
                            ->url(route('mahasiswa.index')), // Ensure this route exists

                        // Add more items here if necessary
                    ]),

                // Other navigation items
                \Filament\Navigation\NavigationItem::make('Berita Acara')
                    ->icon('heroicon-o-clipboard')
                    ->url(route('berita-acara.index')), // Ensure this route exists
            ];
        });
    }

    public function register()
    {
        //
    }
}

