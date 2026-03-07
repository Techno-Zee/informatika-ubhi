<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Title')->required(),
                TextInput::make('image_path')->label('Image Path')->required(),
                TextInput::make('link_url')->label('Link URL')->disabled(),
                Checkbox::make('is_active')->label('Active'),]);
    }
}
