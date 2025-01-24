<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Sasaran;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SasaranResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SasaranResource\RelationManagers;

class SasaranResource extends Resource
{
    protected static ?string $model = Sasaran::class;
    protected static ?string $label = 'Sasaran';
    protected static ?string $pluralLabel = 'Sasaran';
    protected static ?string $navigationLabel = 'Sasaran';
    protected static ?string $navigationGroup = 'Profile';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('deskripsi')
                ->label('Deskripsi')
                ->required(),

                FileUpload::make('gambar')
                ->directory('sasaran-images') // Folder penyimpanan gambar
                ->label('Gambar')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('deskripsi')
                ->limit(50)
                ->label('Deskripsi'),

                ImageColumn::make('gambar')
                ->label('Gambar'),
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
            'index' => Pages\ListSasarans::route('/'),
            'create' => Pages\CreateSasaran::route('/create'),
            'edit' => Pages\EditSasaran::route('/{record}/edit'),
        ];
    }
}
