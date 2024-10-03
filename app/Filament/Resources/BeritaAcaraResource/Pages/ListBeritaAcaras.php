<?php

namespace App\Filament\Resources\BeritaAcaraResource\Pages;

use App\Filament\Resources\BeritaAcaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeritaAcaras extends ListRecords
{
    protected static string $resource = BeritaAcaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    // Override metode getTitle untuk mengubah judul halaman
    public function getTitle(): string
    {
        return 'Berita Acara'; // Mengubah judul menjadi "Berita Acara"
    }
}
