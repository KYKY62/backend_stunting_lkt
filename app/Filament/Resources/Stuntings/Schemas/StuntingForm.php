<?php

namespace App\Filament\Resources\Stuntings\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StuntingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('kecamatan')
                    ->label('Kecamatan')
                    ->required()
                    ->options([
                        'BABALAN' => 'BABALAN',
                        'BAHOROK' => 'BAHOROK',
                        'BATANG SERANGAN' => 'BATANG SERANGAN',
                        'BESITANG' => 'BESITANG',
                        'BINJAI' => 'BINJAI',
                        'BRANDAN BARAT' => 'BRANDAN BARAT',
                        'GEBANG' => 'GEBANG',
                        'HINAI' => 'HINAI',
                        'KUALA' => 'KUALA',
                        'KUTAMBARU' => 'KUTAMBARU',
                        'PADANG TUALANG' => 'PADANG TUALANG',
                        'PANGKALAN SUSU' => 'PANGKALAN SUSU',
                        'PEMATANG JAYA' => 'PEMATANG JAYA',
                        'SALAPIAN' => 'SALAPIAN',
                        'SAWIT SEBERANG' => 'SAWIT SEBERANG',
                        'SECANGGANG' => 'SECANGGANG',
                        'SEI BINGAI' => 'SEI BINGAI',
                        'SEI LEPAN' => 'SEI LEPAN',
                        'SELESAI' => 'SELESAI',
                        'SERAPIT' => 'SERAPIT',
                        'STABAT' => 'STABAT',
                        'TANJUNG PURA' => 'TANJUNG PURA',
                        'WAMPU' => 'WAMPU',
                    ])
                    ->searchable(),

                TextInput::make('jumlah_stunting')
                    ->required()
                    ->numeric(),
            ]);
    }
}
