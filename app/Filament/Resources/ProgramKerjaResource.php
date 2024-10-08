<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramKerjaResource\Pages;
use App\Filament\Resources\ProgramKerjaResource\RelationManagers;
use App\Models\ProgramKerja;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\UrlInput;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\EditAction;

class ProgramKerjaResource extends Resource
{
    protected static ?string $model = ProgramKerja::class;

 // Ubah ini untuk label tunggal dan jamak
 protected static ?string $label = 'Program Kerja'; // Label tunggal
 protected static ?string $pluralLabel = 'Program Kerja'; // Label jamak

 // Ubah label di navigasi sidebar
 protected static ?string $navigationLabel = 'Program Kerja';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Program Kerja')
                            ->required()
                            ->maxLength(255),
                        
                        TextInput::make('link_pendaftaran')
                            ->label('Link Pendaftaran')
                            ->url() // Menambahkan validasi URL
                            ->required(),
                    ]),
                    
                Grid::make(2)
                    ->schema([
                        DateTimePicker::make('tanggal_mulai')
                            ->label('Tanggal Mulai')
                            ->required(),
                        
                        DateTimePicker::make('tanggal_selesai')
                            ->label('Tanggal Selesai')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Program Kerja')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('tanggal_mulai')
                    ->label('Tanggal Mulai')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('tanggal_selesai')
                    ->label('Tanggal Selesai')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('link_pendaftaran')
                    ->label('Link Pendaftaran')
                    ->url(fn ($record) => $record->link_pendaftaran) // Membuat kolom sebagai tautan
                    ->openUrlInNewTab(), // Untuk membuka tautan di tab baru
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
            'index' => Pages\ListProgramKerjas::route('/'),
            'create' => Pages\CreateProgramKerja::route('/create'),
            'edit' => Pages\EditProgramKerja::route('/{record}/edit'),
        ];
    }
}
