<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    // Ubah label di navigasi sidebar
    protected static ?string $navigationLabel = 'Sambutan Ketua Progdi'; // Tambahkan ini
    
    protected static ?string $navigationIcon = 'heroicon-o-user-group'; // Ikon untuk profil
    protected static ?string $pluralLabel = 'Sambutan Ketua Progdi';

    protected static ?string $navigationGroup = 'Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Forms\Components\RichEditor::make('message')
                    ->label('Message')
                    ->required(),
                FileUpload::make('image')
                    ->label('Profile Picture')
                    ->image() // Ensures only images are uploaded
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->sortable()->searchable(),
                TextColumn::make('title')->label('Title'),
                TextColumn::make('message')->label('Message'),
                ImageColumn::make('image')->label('Profile Picture'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}

