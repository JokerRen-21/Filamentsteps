<?php

namespace App\Filament\Resources\Catalogs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CatalogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(), 
               TextInput::make('description')
                    ->required()
                    ->maxLength(65535),
                TextInput::make('email')
                    ->label('Contact Email')
                    ->email()
                    ->required(),
            ]);
    }
}
