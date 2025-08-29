<?php

namespace App\Filament\Resources\Stuntings\Pages;

use App\Filament\Resources\Stuntings\StuntingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStuntings extends ListRecords
{
    protected static string $resource = StuntingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Tambah Data Stunting'),
        ];
    }
}
