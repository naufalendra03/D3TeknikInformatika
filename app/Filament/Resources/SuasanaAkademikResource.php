<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuasanaAkademikResource\Pages;
use App\Filament\Resources\SuasanaAkademikResource\RelationManagers;
use App\Models\SuasanaAkademik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuasanaAkademikResource extends Resource
{
    protected static ?string $model = SuasanaAkademik::class;

    protected static ?string $label = 'Suasana Akademik'; // Label tunggal
    protected static ?string $pluralLabel = 'Suasana Akademik'; // Label jamak

    // Ubah label di navigasi sidebar
    protected static ?string $navigationLabel = 'Suasana Akademik';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Akademik';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TiptapEditor::make('konten')
                ->label('Konten Suasana Akademik')
                ->required(), // Panggil method required() di sini, setelah konfigurasi lainnya
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('konten')
                ->label('Konten')
                ->limit(50) // Membatasi panjang tampilan teks di tabel
                ->formatStateUsing(fn ($state) => strip_tags($state)), // Menghapus tag HTML jika diperlukan
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
            'index' => Pages\ListSuasanaAkademiks::route('/'),
            'create' => Pages\CreateSuasanaAkademik::route('/create'),
            'edit' => Pages\EditSuasanaAkademik::route('/{record}/edit'),
        ];
    }
}
