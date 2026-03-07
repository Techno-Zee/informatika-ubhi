<?php

namespace App\Filament\Resources\LetterRequests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Repeater\TableColumn;
use Filament\Forms\Components\RichEditor\TextColor;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LetterRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.user.name')->label('Student Name')->searchable(),
                TextColumn::make('letterType.name')->label('Letter Type')->searchable(),
                TextColumn::make('purpose')->limit(50)->searchable(),
                TextColumn::make('status')->badge()->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
