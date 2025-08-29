<?php

namespace App\Filament\Resources\Stuntings;

use App\Filament\Resources\Stuntings\Pages\CreateStunting;
use App\Filament\Resources\Stuntings\Pages\EditStunting;
use App\Filament\Resources\Stuntings\Pages\ListStuntings;
use App\Filament\Resources\Stuntings\Schemas\StuntingForm;
use App\Filament\Resources\Stuntings\Tables\StuntingsTable;
use App\Models\Stunting;
use BackedEnum;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StuntingResource extends Resource
{
    protected static ?string $model = Stunting::class;
    protected static ?string $slug = 'stunting';
    protected static ?string $pluralModelLabel = 'Tambah Data Stunting';
    protected static ?string $navigationLabel = 'Data Stunting';
    protected static ?int $navigationSort = 1;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function canAccess(): bool
    {
        return Filament::auth()->user()->hasRole('admin_stunting');
    }

    protected static ?string $recordTitleAttribute = 'Data Stunting';

    public static function form(Schema $schema): Schema
    {
        return StuntingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StuntingsTable::configure($table);
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
            'index' => ListStuntings::route('/'),
            'create' => CreateStunting::route('/create'),
            'edit' => EditStunting::route('/{record}/edit'),
        ];
    }
}
