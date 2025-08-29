<?php

namespace App\Filament\Resources\Stuntings\Pages;

use App\Filament\Resources\Stuntings\StuntingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStunting extends EditRecord
{
    protected static string $resource = StuntingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
