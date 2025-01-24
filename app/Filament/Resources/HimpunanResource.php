<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Himpunan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\HimpunanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HimpunanResource\RelationManagers;

class HimpunanResource extends Resource
{
    protected static ?string $model = Himpunan::class;

    protected static ?string $label = 'Himpunan';
    protected static ?string $pluralLabel = 'Himpunan';
    protected static ?string $navigationLabel = 'Himpunan';

    protected static ?string $navigationGroup = 'Kemahasiswaan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            FileUpload::make('logo')
                ->image()
                ->directory('himpunan'),
            Textarea::make('visi')
                ->required(),
            Textarea::make('misi')
                ->required(),
            TextInput::make('sekretaris')->required(),
            TextInput::make('ketua')->required(),
            TextInput::make('bendahara')->required(),
            Select::make('kategori_id')
                ->label('Kategori')
                ->relationship('kategori', 'judul') // Dropdown yang menampilkan nama kategori
                ->required()
                ->searchable() // Tambahkan fitur pencarian
                ->preload(),
            ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\ImageColumn::make('logo')
                ->label('Logo')
                ->rounded()
                ->size(50),

            Tables\Columns\TextColumn::make('visi')
                ->label('Visi')
                ->limit(50)
                ->tooltip(fn ($record) => $record->visi),

            Tables\Columns\TextColumn::make('misi')
                ->label('Misi')
                ->limit(50)
                ->tooltip(fn ($record) => $record->misi),

            Tables\Columns\TextColumn::make('sekretaris')
                ->label('Sekretaris')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('ketua')
                ->label('Ketua Umum')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('bendahara')
                ->label('Bendahara')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('kategori.judul')
                ->label('Kategori')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Dibuat Pada')
                ->dateTime()
                ->sortable(),

            TextColumn::make('kategori.judul')
                ->label('Kategori') // Nama label kolom
                ->sortable()
                ->searchable(),
        ])
        ->filters([])
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
            'index' => Pages\ListHimpunans::route('/'),
            'create' => Pages\CreateHimpunan::route('/create'),
            'edit' => Pages\EditHimpunan::route('/{record}/edit'),
        ];
    }
}
