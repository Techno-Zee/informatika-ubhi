<?php

namespace App\Filament\Resources\Announcements\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AnnouncementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required()->maxLength(255),
                TextInput::make('content')->label('Content')->required(),
                TextInput::make('file_path')->label('File Path')->maxLength(255),
                DateTimePicker::make('published_at')->label('Published At')->required()->seconds(false),
                Select::make('creator_id')
                    ->label('Created By')
                    ->relationship('creator', 'name')
                    ->disabled(),
            ]);
    }
}
