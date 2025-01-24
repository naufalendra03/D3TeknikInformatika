<?php

namespace App\Filament\Resources\SambutanKetuaResource\Pages;

use App\Filament\Resources\SambutanKetuaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSambutanKetua extends EditRecord
{
    protected static string $resource = SambutanKetuaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
