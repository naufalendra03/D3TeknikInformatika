<?php

namespace App\Filament\Resources\KategoriHimpunanResource\Pages;

use App\Filament\Resources\KategoriHimpunanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriHimpunans extends ListRecords
{
    protected static string $resource = KategoriHimpunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
