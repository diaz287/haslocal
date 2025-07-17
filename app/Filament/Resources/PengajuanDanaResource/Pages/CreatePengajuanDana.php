<?php

namespace App\Filament\Resources\PengajuanDanaResource\Pages;

use App\Filament\Resources\PengajuanDanaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePengajuanDana extends CreateRecord
{
    protected static string $resource = PengajuanDanaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['tipe_pengajuan'] = 'inhouse';
        return $data;
    }
}
