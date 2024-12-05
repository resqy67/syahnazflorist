<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProductsResource\Pages;
use App\Filament\Admin\Resources\ProductsResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Produk';

    protected static ?string $title = 'Produk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Produk')
                    ->required()
                    ->reactive() // Memastikan input memicu reaktivitas
                    ->debounce(500)
                    ->afterStateUpdated(
                        fn($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ), // Tambahkan validasi required
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->disabled()
                    ->unique(ignoreRecord: true), // Tambahkan validasi required
                Forms\Components\TextInput::make('price')
                    ->label('Harga Produk')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                Forms\Components\TextInput::make('size')
                    ->label('Ukuran Produk')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi Produk')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\BelongsToSelect::make('category_id')->label('Kategori Produk')
                    ->relationship('category', 'name')
                    ->required(), // Tambahkan validasi required
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar Produk')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Harga Produk')
                    ->numeric()
                    ->prefix('Rp')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')->label('Gambar'),
                Tables\Columns\TextColumn::make('size')
                    ->label('Ukuran Produk')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('slug')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('category_id')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
