<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumniResource\Pages;
use App\Models\Alumni;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;

class AlumniResource extends Resource
{
    protected static ?string $model = Alumni::class;

    protected static ?string $label = 'Alumni';
    protected static ?string $pluralLabel = 'Alumni';
    protected static ?string $navigationLabel = 'Alumni';

    protected static ?string $navigationGroup = 'Kemahasiswaan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->required()->label('Nama Lengkap'),
                TextInput::make('nim')->required()->unique()->label('NIM'),
                TextInput::make('ipk')->required()->numeric()->step(0.01)->label('IPK'),
                TextInput::make('tahun_lulus')->required()->numeric()->label('Tahun Lulus'),
                TextInput::make('wisuda')->required()->numeric()->label('Wisuda'),
                TextInput::make('pekerjaan')->required()->label('Pekerjaan'),
                TextInput::make('nama_instansi')->required()->label('Nama Instansi'),
                Toggle::make('is_valid')
                    ->label('Validasi')
                    ->default(false),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama Lengkap'),
                TextColumn::make('nim')->label('NIM'),
                TextColumn::make('ipk')->label('IPK'),
                TextColumn::make('tahun_lulus')->label('Tahun Lulus'),
                TextColumn::make('wisuda')->label('Wisuda'),
                TextColumn::make('pekerjaan')->label('Pekerjaan'),
                TextColumn::make('nama_instansi')->label('Nama Instansi'),
                BooleanColumn::make('is_valid')
                    ->label('Validasi')
                    ->action(function (Alumni $record) {
                        $record->update(['is_valid' => !$record->is_valid]);
    })

            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlumnis::route('/'),
            'create' => Pages\CreateAlumni::route('/create'),
            'edit' => Pages\EditAlumni::route('/{record}/edit'),
        ];
    }
}
