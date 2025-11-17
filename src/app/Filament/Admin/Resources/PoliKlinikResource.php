<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PoliKlinikResource\Pages;
use App\Filament\Admin\Resources\PoliKlinikResource\RelationManagers;
use App\Models\PoliKlinik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PoliKlinikResource extends Resource
{
    protected static ?string $model = PoliKlinik::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('rumah_sakit_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kode_poli')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('nama_poli')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('rumah_sakit_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kode_poli')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_poli')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListPoliKliniks::route('/'),
            'create' => Pages\CreatePoliKlinik::route('/create'),
            'edit' => Pages\EditPoliKlinik::route('/{record}/edit'),
        ];
    }
}
