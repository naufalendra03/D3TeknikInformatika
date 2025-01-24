<?php

namespace App\Filament\Resources;

use DateTime;
use Filament\Forms;
use Filament\Tables;
use App\Models\Galeri;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GaleriResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GaleriResource\RelationManagers;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $label = 'Galeri'; // Label tunggal
    protected static ?string $pluralLabel = 'Galeri'; // Label jamak

    // Ubah label di navigasi sidebar
    protected static ?string $navigationLabel = 'Galeri';

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Publikasi';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('judul')
                ->required()
                ->label('Judul'),
            Textarea::make('deskripsi')
                ->label('Deskripsi'),
            FileUpload::make('gambar')
                ->label('Upload Gambar')
                ->directory('galeri-images')
                ->required(),
            Select::make('kategori_id')
                ->label('Kategori')
                ->relationship('kategori', 'judul') // Dropdown yang menampilkan nama kategori
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('judul')->sortable()->searchable(),
            TextColumn::make('deskripsi'),
            ImageColumn::make('gambar'),
            TextColumn::make('created_at')->dateTime('d/m/Y'),

            // Menampilkan nama kategori berdasarkan relasi
            TextColumn::make('kategori.judul')
                ->label('Kategori') // Nama label kolom
                ->sortable()
                ->searchable(),
            
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
