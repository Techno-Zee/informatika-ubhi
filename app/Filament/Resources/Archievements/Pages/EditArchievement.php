<?php

namespace App\Filament\Resources\Archievements\Pages;

use App\Filament\Resources\Archievements\ArchievementResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditArchievement extends EditRecord
{
    protected static string $resource = ArchievementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
