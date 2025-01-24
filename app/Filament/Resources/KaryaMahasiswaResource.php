<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KaryaMahasiswaResource\Pages;
use App\Filament\Resources\KaryaMahasiswaResource\RelationManagers;
use App\Models\KaryaMahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput; // Tambahkan ini
use Filament\Forms\Components\Textarea; // Tambahkan ini
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KaryaMahasiswaResource extends Resource
{
    protected static ?string $model = KaryaMahasiswa::class;

    protected static ?string $pluralLabel = 'Karya Mahasiswa'; // Label jamak

    // Ubah label di navigasi sidebar
    protected static ?string $navigationLabel = 'Karya Mahasiswa';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Publikasi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('foto')->label('Foto')->image(),
            TextInput::make('judul')->required(),
            TextInput::make('nama')->required(),
            Textarea::make('deskripsi')->required(),
            TextInput::make('link')->url()->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('judul'),
            TextColumn::make('nama'),
            TextColumn::make('deskripsi')->limit(50),
            TextColumn::make('link')
            ->label('Link')
            ->sortable(), // Menambahkan fitur sorting (opsional)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKaryaMahasiswas::route('/'),
            'create' => Pages\CreateKaryaMahasiswa::route('/create'),
            'edit' => Pages\EditKaryaMahasiswa::route('/{record}/edit'),
        ];
    }
}
