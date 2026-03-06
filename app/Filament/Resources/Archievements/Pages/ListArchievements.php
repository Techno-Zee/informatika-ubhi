<?php

namespace App\Filament\Resources\Archievements\Pages;

use App\Filament\Resources\Archievements\ArchievementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListArchievements extends ListRecords
{
    protected static string $resource = ArchievementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
