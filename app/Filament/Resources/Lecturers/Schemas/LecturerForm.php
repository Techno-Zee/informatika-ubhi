<?php

namespace App\Filament\Resources\Lecturers\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class LecturerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User Data')
                    ->relationship('user')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Dosen')
                            ->required(),

                        TextInput::make('email')
                            ->email()
                            ->required(),
                    ]),
                TextInput::make('lecturer_number')->label('Lecturer Number')->required(),
                TextInput::make('position')->label('Position')->required(),
            ]);
    }
}
