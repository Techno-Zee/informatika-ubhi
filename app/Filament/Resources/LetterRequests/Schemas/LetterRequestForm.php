<?php

namespace App\Filament\Resources\LetterRequests\Schemas;

use Filament\Forms\Components\{Select, TextInput, Textarea, DateTimePicker};
use Filament\Schemas\Schema;

class LetterRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('student_id')
                    ->label('Student Name')
                    ->relationship('student', 'id')
                    ->getOptionLabelFromRecordUsing(fn($record) => $record->user->name)
                    ->disabled()
                    ->native(false),

                Select::make('letter_type_id')
                    ->label('Letter Type')
                    ->relationship('letterType', 'name')
                    ->searchable()
                    ->required(),

                Textarea::make('purpose')
                    ->required(),

                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ])
                    ->required(),

                TextInput::make('admin_notes')
                    ->label('Admin Notes'),

                Select::make('approved_by')
                    ->label('Approved By')
                    ->relationship('user', 'name')
                    ->disabled(),

                DateTimePicker::make('approved_at')
                    ->label('Approved At'),
            ]);
    }
}
