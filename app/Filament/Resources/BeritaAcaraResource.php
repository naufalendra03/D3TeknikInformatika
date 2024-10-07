<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaAcaraResource\Pages;
use App\Filament\Resources\BeritaAcaraResource\RelationManagers;
use App\Models\BeritaAcara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\DateColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TagsInput;
use Illuminate\Support\Str;

class BeritaAcaraResource extends Resource
{
    protected static ?string $model = BeritaAcara::class;

    // Ubah ini untuk label tunggal dan jamak
    protected static ?string $label = 'Berita Acara'; // Label tunggal
    protected static ?string $pluralLabel = 'Berita Acara'; // Label jamak

    // Ubah label di navigasi sidebar
    protected static ?string $navigationLabel = 'Berita Acara';
    
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\Grid::make(2)
                ->schema([
                    TextInput::make('judul')
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (string $operation, string $state, Forms\Set $set) {
                            if ($operation === 'edit') {
                                return;
                            }
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->label('Slug')
                        ->rules(['required', 'unique:berita_acaras,slug'])
                        ->helperText('Auto-generated from the title if left blank'),
                ]),

            // RichEditor ditempatkan di luar Grid
            RichEditor::make('isi')
                ->label('Content')
                ->required()
                ->columnSpan('full'), // Membuatnya mengambil seluruh lebar form

            Forms\Components\Grid::make(2)
                ->schema([
                    FileUpload::make('gambar')
                    ->label('Upload Image'),


                    DatePicker::make('published_date')
                        ->label('Published Date')
                        ->default(now()) // Set default value to today's date
                        ->required(),
                ]),

            
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom untuk menampilkan judul
                TextColumn::make('judul')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                // Kolom untuk menampilkan slug
                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable(),

                // Kolom untuk menampilkan konten (disingkat)
                TextColumn::make('isi')
                    ->label('Content')
                    ->limit(50), // Menampilkan 50 karakter pertama

                // Kolom untuk menampilkan nama penulis
            

                // Kolom untuk menampilkan kategori
            

                // Kolom untuk menampilkan tanggal publikasi
                TextColumn::make('published_date')
                ->label('Published Date')
                ->date(), // Menambahkan format tanggal

                // Kolom untuk menampilkan tags
                
                // Kolom untuk menampilkan gambar
                ImageColumn::make('gambar')
                    ->label('Image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListBeritaAcaras::route('/'),
            'create' => Pages\CreateBeritaAcara::route('/create'),
            'edit' => Pages\EditBeritaAcara::route('/{record}/edit'),
            'view' => Pages\ViewBeritaAcara::route('/{record}'),
        ];
    }
}
