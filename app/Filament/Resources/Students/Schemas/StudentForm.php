<?php

namespace App\Filament\Resources\Students\Schemas;

use App\Models\ClassRoom;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StudentForm
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
                Select::make('classroom')
                    ->options(ClassRoom::pluck('name', 'id'))
                    ->label('Class Room'),
                Select::make('gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                    ])->label('Gender')->required(),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'active' => 'Active',
                        'on_lave' => 'On Lave',
                        'graduated' => 'Graduated',
                        'inactive' => 'Inactive',
                    ])
            ]);
    }
}
