<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Tujuan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TujuanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TujuanResource\RelationManagers;

class TujuanResource extends Resource
{
    protected static ?string $label = 'Tujuan';
    protected static ?string $model = Tujuan::class;
    protected static ?string $pluralLabel = 'Tujuan';
    protected static ?string $navigationLabel = 'Tujuan';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('deskripsi')
                    ->required()
                    ->label('Deskripsi'),
    
                FileUpload::make('gambar')
                    ->directory('tujuan-images') // Simpan gambar ke direktori `storage/app/public/tujuan-images`
                    ->label('Gambar'),
            ]);
    }
    

    public static function table(Table $table): Table
{
    return $table
        ->columns([

            TextColumn::make('deskripsi')
                ->limit(50) // Batasi panjang deskripsi yang ditampilkan
                ->label('Deskripsi'),

            ImageColumn::make('gambar')
                ->label('Gambar'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListTujuans::route('/'),
            'create' => Pages\CreateTujuan::route('/create'),
            'edit' => Pages\EditTujuan::route('/{record}/edit'),
        ];
    }
}
