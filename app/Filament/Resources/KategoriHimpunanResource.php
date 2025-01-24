<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\KategoriHimpunan;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select; // Tambahkan ini
use App\Filament\Resources\KategoriHimpunanResource\Pages;

class KategoriHimpunanResource extends Resource
{
    protected static ?string $model = KategoriHimpunan::class;

    protected static ?string $label = 'Kategori Himpunan';
    protected static ?string $pluralLabel = 'Kategor Himpunan';
    protected static ?string $navigationLabel = 'Kategori Himpunan';

    protected static ?string $navigationGroup = 'Kemahasiswaan';

    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->directory('kategori-himpunan')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('judul')
                ->label('Judul')
                ->searchable(),

            ImageColumn::make('gambar')
                ->label('Gambar')
                ->circular(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListKategoriHimpunans::route('/'),
            'create' => Pages\CreateKategoriHimpunan::route('/create'),
            'edit' => Pages\EditKategoriHimpunan::route('/{record}/edit'),
        ];
    }
}
