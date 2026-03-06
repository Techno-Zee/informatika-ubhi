<?php

namespace App\Filament\Resources\Archievements;

use App\Filament\Resources\Archievements\Pages\CreateArchievement;
use App\Filament\Resources\Archievements\Pages\EditArchievement;
use App\Filament\Resources\Archievements\Pages\ListArchievements;
use App\Filament\Resources\Archievements\Schemas\ArchievementForm;
use App\Filament\Resources\Archievements\Tables\ArchievementsTable;
use App\Models\Archievement;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ArchievementResource extends Resource
{
    protected static ?string $model = ArchievementResource::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
protected static string|UnitEnum|null $navigationGroup = 'Content';
    protected static ?string $recordTitleAttribute = 'Archievement';

    public static function form(Schema $schema): Schema
    {
        return ArchievementForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ArchievementsTable::configure($table);
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
            'index' => ListArchievements::route('/'),
            'create' => CreateArchievement::route('/create'),
            'edit' => EditArchievement::route('/{record}/edit'),
        ];
    }
}
