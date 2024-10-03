<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Models\Mahasiswa;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nim'),
                Forms\Components\TextInput::make('nama_mhs'),
                Forms\Components\TextInput::make('alamat_mhs'),
                Forms\Components\TextInput::make('telp_mhs'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nim')->label('NIM'),
                Tables\Columns\TextColumn::make('nama_mhs')->label('Nama'),
                Tables\Columns\TextColumn::make('alamat_mhs')->label('Alamat'),
                Tables\Columns\TextColumn::make('telp_mhs')->label('Telepon'),
            ])
            ->filters([
                //
            ])
            
            ->columns([
                Tables\Columns\TextColumn::make('nim')
                    ->label('NIM')
                    ->searchable(), // Tambahkan pencarian di kolom NIM
                Tables\Columns\TextColumn::make('nama_mhs')
                    ->label('Nama Mahasiswa')
                    ->searchable(), // Tambahkan pencarian di kolom Nama
                Tables\Columns\TextColumn::make('alamat_mhs')
                    ->label('Alamat')
                    ->searchable(), // Tambahkan pencarian di kolom Alamat
                Tables\Columns\TextColumn::make('telp_mhs')
                    ->label('Telepon')
                    ->searchable(), // Tambahkan pencarian di kolom Telepon
                    Tables\Columns\TextColumn::make('catatan')->label('Catatan Dosen'),
            ])
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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
