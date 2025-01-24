<?php

namespace App\Filament\Resources\KategoriHimpunanResource\Pages;

use App\Filament\Resources\KategoriHimpunanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriHimpunan extends EditRecord
{
    protected static string $resource = KategoriHimpunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
