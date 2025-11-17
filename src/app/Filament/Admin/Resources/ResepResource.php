<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ResepResource\Pages;
use App\Filament\Admin\Resources\ResepResource\RelationManagers;
use App\Models\Resep;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResepResource extends Resource
{
    protected static ?string $model = Resep::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kunjungan_id')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('pasien_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('dokter_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nomor_resep')
                    ->required()
                    ->maxLength(50),
                Forms\Components\DateTimePicker::make('tanggal_resep')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\Textarea::make('catatan')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kunjungan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dokter_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nomor_resep')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_resep')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListReseps::route('/'),
            'create' => Pages\CreateResep::route('/create'),
            'edit' => Pages\EditResep::route('/{record}/edit'),
        ];
    }
}
