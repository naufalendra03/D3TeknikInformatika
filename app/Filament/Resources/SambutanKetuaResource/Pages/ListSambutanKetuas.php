<?php

namespace App\Filament\Resources\SambutanKetuaResource\Pages;

use App\Filament\Resources\SambutanKetuaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSambutanKetuas extends ListRecords
{
    protected static string $resource = SambutanKetuaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
