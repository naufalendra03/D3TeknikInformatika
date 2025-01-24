<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageContentResource\Pages;
use App\Filament\Resources\HomepageContentResource\RelationManagers;
use App\Models\HomepageContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomepageContentResource extends Resource
{
    protected static ?string $model = HomepageContent::class;

    protected static ?string $label = 'Konten Beranda';
    protected static ?string $pluralLabel = 'Konten Beranda';
    protected static ?string $navigationLabel = 'Konten Beranda';

    protected static ?string $navigationGroup = 'Beranda';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('title')
                ->label('Judul')
                ->required(),
            Textarea::make('description')
                ->label('Deskripsi')
                ->required(),
            FileUpload::make('images')
                ->label('Gambar')
                ->multiple() // Mengizinkan upload banyak gambar
                ->directory('homepage-images') // Menyimpan di folder tertentu
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('title')
                ->label('Judul')
                ->searchable()
                ->sortable(),
            TextColumn::make('description')
                ->label('Deskripsi')
                ->limit(50), // Membatasi panjang teks deskripsi
            TextColumn::make('images')
                ->label('Gambar')
                ->formatStateUsing(function ($state) {
                    $images = json_decode($state, true);
                    if (!empty($images)) {
                        // Menampilkan hanya gambar pertama
                        return '<img src="' . asset('storage/' . $images[0]) . '" alt="Gambar" style="width: 50px; height: 50px; border-radius: 5px;">';
                    }
                    return 'Tidak ada gambar';
                })
                ->html(), // Mengaktifkan HTML di kolom
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
            'index' => Pages\ListHomepageContents::route('/'),
            'create' => Pages\CreateHomepageContent::route('/create'),
            'edit' => Pages\EditHomepageContent::route('/{record}/edit'),
        ];
    }
}
