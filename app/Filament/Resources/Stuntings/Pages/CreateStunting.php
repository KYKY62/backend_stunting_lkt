<?php

namespace App\Filament\Resources\Stuntings\Pages;

use App\Filament\Resources\Stuntings\StuntingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStunting extends CreateRecord
{
    protected static string $resource = StuntingResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['id_user'] = auth()->id();
        return $data;
    }
}
