<?php

namespace App\Filament\Resources\FichasResource\Pages;

use App\Filament\Resources\FichasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFichas extends ListRecords
{
    protected static string $resource = FichasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Crear Ficha'),
        ];
    }
}
