<?php

namespace App\Filament\Resources\KaryaMahasiswaResource\Pages;

use App\Filament\Resources\KaryaMahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKaryaMahasiswas extends ListRecords
{
    protected static string $resource = KaryaMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
