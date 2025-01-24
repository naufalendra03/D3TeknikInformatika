<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SambutanKetuaResource\Pages;
use App\Models\SambutanKetua;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;

class SambutanKetuaResource extends Resource
{
    protected static ?string $model = SambutanKetua::class;

    protected static ?string $label = 'Sambutan';
    protected static ?string $pluralLabel = 'Sambutan';
    protected static ?string $navigationLabel = 'Sambutan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama')
                    ->required(),
                TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required(),
                RichEditor::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->required()
                    ->directory('sambutan-ketua'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('nama')
                ->label('Nama')
                ->sortable()
                ->searchable(),
                
            TextColumn::make('jabatan')
                ->label('Jabatan')
                ->sortable()
                ->searchable(),
                
            TextColumn::make('deskripsi')
                ->label('Deskripsi')
                ->limit(50) // Menampilkan hanya 50 karakter pertama
                ->wrap(), // Agar teks panjang terpotong rapi
                
            TextColumn::make('gambar')
                ->label('Gambar')
                ->getStateUsing(fn (SambutanKetua $record) => basename($record->gambar)), // Hanya menampilkan nama file
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
            'index' => Pages\ListSambutanKetuas::route('/'),
            'create' => Pages\CreateSambutanKetua::route('/create'),
            'edit' => Pages\EditSambutanKetua::route('/{record}/edit'),
        ];
    }
}
