<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ResepDetailResource\Pages;
use App\Filament\Admin\Resources\ResepDetailResource\RelationManagers;
use App\Models\ResepDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResepDetailResource extends Resource
{
    protected static ?string $model = ResepDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('resep_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('obat_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('aturan_pakai')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('catatan')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('harga_satuan')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('subtotal')
                    ->numeric()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('resep_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('obat_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('aturan_pakai')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga_satuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subtotal')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListResepDetails::route('/'),
            'create' => Pages\CreateResepDetail::route('/create'),
            'edit' => Pages\EditResepDetail::route('/{record}/edit'),
        ];
    }
}
