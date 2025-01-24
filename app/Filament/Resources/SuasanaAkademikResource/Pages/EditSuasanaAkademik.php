<?php

namespace App\Filament\Resources\SuasanaAkademikResource\Pages;

use App\Filament\Resources\SuasanaAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuasanaAkademik extends EditRecord
{
    protected static string $resource = SuasanaAkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
