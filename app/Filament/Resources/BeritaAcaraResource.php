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
                        ->label('Title')
                        ->required(),
                ]),

            TextInput::make('slug')
                ->label('Slug')
                ->rules(['required', 'unique:berita_acaras,slug'])
                ->helperText('Auto-generated from the title if left blank'),

            RichEditor::make('isi')
                ->label('Content')
                ->required(),

            Forms\Components\Grid::make(2)
                ->schema([
                    Select::make('author')
                        ->label('Author')
                        ->options([
                            'author1' => 'Author 1',
                            'author2' => 'Author 2',
                        ])
                        ->required(),

                    Select::make('category')
                        ->label('Category')
                        ->options([
                            'category1' => 'Category 1',
                            'category2' => 'Category 2',
                        ])
                        ->required(),
                ]),

            Forms\Components\Grid::make(2)
                ->schema([
                    DatePicker::make('published_date')
                        ->label('Published Date'),
                    
                    TagsInput::make('tags')
                        ->label('Tags')
                        ->placeholder('New tag'),
                ]),

            FileUpload::make('gambar')
                ->label('Upload Image'),
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
                TextColumn::make('author')
                    ->label('Author'),

                // Kolom untuk menampilkan kategori
                TextColumn::make('category')
                    ->label('Category'),

                // Kolom untuk menampilkan tanggal publikasi
                TextColumn::make('published_date')
                ->label('Published Date')
                ->date(), // Menambahkan format tanggal

                // Kolom untuk menampilkan tags
                TagsColumn::make('tags')
                    ->label('Tags'),

                // Kolom untuk menampilkan gambar
                ImageColumn::make('gambar')
                    ->label('Image'),
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
            'index' => Pages\ListBeritaAcaras::route('/'),
            'create' => Pages\CreateBeritaAcara::route('/create'),
            'edit' => Pages\EditBeritaAcara::route('/{record}/edit'),
        ];
    }
}
