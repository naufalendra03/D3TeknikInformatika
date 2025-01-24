<?php

namespace App\Filament\Resources\SuasanaAkademikResource\Pages;

use App\Filament\Resources\SuasanaAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuasanaAkademiks extends ListRecords
{
    protected static string $resource = SuasanaAkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
