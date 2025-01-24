<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kategori;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\ProgramKerja;
use App\Models\KategoriHimpunan;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\ProgramKerjaResource\Pages;

class ProgramKerjaResource extends Resource
{
    protected static ?string $model = ProgramKerja::class;

    protected static ?string $label = 'Program Kerja';
    protected static ?string $pluralLabel = 'Program Kerja';
    protected static ?string $navigationLabel = 'Program Kerja';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Kemahasiswaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2)
                    ->schema([
                        TextInput::make('judul')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Forms\Set $set, $get) {
                                if (!$get('slug') || empty($get('slug'))) {
                                    $set('slug', Str::slug($state));
                                }
                            }),

                        TextInput::make('slug')
                            ->required()
                            ->disabled()
                            ->helperText('Slug akan dibuat otomatis berdasarkan judul')
                            ->rules(function ($record) {
                                return ['required', 'unique:program_kerjas,slug,' . ($record ? $record->id : 'NULL')];
                            }),

                        // Dropdown untuk memilih kategori berdasarkan slug
                        Select::make('kategori_id')
                            ->label('Kategori')
                            ->options(
                                KategoriHimpunan::all()->pluck('judul', 'id') // Mengambil id dan judul dari KategoriHimpunan
                            )
                            ->required()
                            ->searchable(),
                    ]),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),

                FileUpload::make('gambar')
                    ->image()
                    ->directory('program-kerja')
                    ->helperText('Upload gambar terkait program kerja'),

            ]);
    }
public static function save(Form $form, $record): void
    {
        $data = $form->getState();
        
        // Mencari kategori berdasarkan slug yang dipilih di dropdown
        $kategori = Kategori::where('slug', $data['kategori_slug'])->first();

        // Menyimpan kategori_id ke dalam record ProgramKerja
        $record->kategori_id = $kategori->id;

        // Menyimpan perubahan pada record ProgramKerja
        parent::save($form, $record);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('kategori.judul') // Menampilkan judul kategori
                    ->label('Kategori')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50),

                TextColumn::make('gambar')
                    ->label('Gambar')
                    ->formatStateUsing(fn ($record) => $record->gambar ? 'Ada' : 'Tidak Ada'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
