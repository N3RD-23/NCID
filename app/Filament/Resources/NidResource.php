<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NidResource\Pages;
use App\Models\Nid;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class NidResource extends Resource
{
    protected static ?string $model = Nid::class;

    protected static ?string $slug = 'nids';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('id_number')
                    ->required(),

                TextInput::make('full_name')
                    ->required(),

                TextInput::make('common_name'),

                TextInput::make('sex')
                    ->required(),

                TextInput::make('address')
                    ->required(),

                TextInput::make('date_of_birth')
                    ->required(),

                TextInput::make('atoll')
                    ->required(),

                TextInput::make('island')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_number')
                ->searchable()
                ,

                TextColumn::make('full_name')
                ->searchable(),

                TextColumn::make('common_name')
                ->searchable(),

                TextColumn::make('sex')
                ->sortable(),

                TextColumn::make('address')
                ->searchable(),

                TextColumn::make('date_of_birth')
                ->sortable()
                ,

                TextColumn::make('atoll'),

                TextColumn::make('island'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNids::route('/'),
//            'create' => Pages\CreateNid::route('/create'),
//            'edit' => Pages\EditNid::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}
