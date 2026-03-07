<?php

namespace App\Filament\Resources\LetterTypes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LetterTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Name'),
                TextInput::make('description')->label('Description'),
                FileUpload::make('template_path')->label('Template Path')
                    ->acceptedFileTypes([
                        'application/pdf',
                    ])->maxSize(10240),
            ]);
    }
}
