<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;


NavigationGroup::make()
    ->label('Halaman')  // Menambahkan teks pembatas di sidebar
    ->collapsed();