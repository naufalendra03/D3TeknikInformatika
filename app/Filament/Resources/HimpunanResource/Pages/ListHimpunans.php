<?php

namespace App\Filament\Resources\HimpunanResource\Pages;

use App\Filament\Resources\HimpunanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHimpunans extends ListRecords
{
    protected static string $resource = HimpunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
