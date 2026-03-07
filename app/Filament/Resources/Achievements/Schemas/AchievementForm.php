<?php

namespace App\Filament\Resources\Achievements\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AchievementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required(),
                TextInput::make('level')->label('Level')->required(),
                TextInput::make('year')
                    ->label('Year')
                    ->rule('digits:4')
                    ->required(),
                Select::make('students')
                    ->label('Students')
                    ->relationship('students', 'id')
                    ->multiple()
                    ->getOptionLabelFromRecordUsing(fn($record) => $record->user->name)
                    ->preload(),
                FileUpload::make('evidence_path')->label('Evidence Path')->required(),
                Textarea::make('description')->label('Description')->required(),
            ]);
    }
}
