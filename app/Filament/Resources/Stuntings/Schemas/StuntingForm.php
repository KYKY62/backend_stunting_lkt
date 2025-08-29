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
                        'BATANG_SERANGAN' => 'BATANG SERANGAN',
                        'BESITANG' => 'BESITANG',
                        'BINJAI' => 'BINJAI',
                        'BRANDAN_BARAT' => 'BRANDAN BARAT',
                        'GEBANG' => 'GEBANG',
                        'HINAI' => 'HINAI',
                        'KUALA' => 'KUALA',
                        'KUTAMBARU' => 'KUTAMBARU',
                        'PADANG_TUALANG' => 'PADANG TUALANG',
                        'PANGKALAN_SUSU' => 'PANGKALAN SUSU',
                        'PEMATANG_JAYA' => 'PEMATANG JAYA',
                        'SALAPIAN' => 'SALAPIAN',
                        'SAWIT_SEBERANG' => 'SAWIT SEBERANG',
                        'SECANGGANG' => 'SECANGGANG',
                        'SEI_BINGAI' => 'SEI BINGAI',
                        'SEI_LEPAN' => 'SEI LEPAN',
                        'SELESAI' => 'SELESAI',
                        'SERAPIT' => 'SERAPIT',
                        'STABAT' => 'STABAT',
                        'TANJUNG_PURA' => 'TANJUNG PURA',
                        'WAMPU' => 'WAMPU',
                    ])
                    ->searchable(),

                TextInput::make('jumlah_stunting')
                    ->required()
                    ->numeric(),
            ]);
    }
}
