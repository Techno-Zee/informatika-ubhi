<?php

namespace App\Filament\Resources\ClassRooms\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClassRoomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Name'),
                TextInput::make('capacity')->label('Capacity'),
                TextInput::make('school_year')->label('School Year'),
            ]);
    }
}
