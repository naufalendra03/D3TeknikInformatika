<?php

namespace App\Filament\Resources\HimpunanResource\Pages;

use App\Filament\Resources\HimpunanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHimpunan extends EditRecord
{
    protected static string $resource = HimpunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
