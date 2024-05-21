<?php

namespace App\Filament\Resources\ColumnResource\Pages;

use App\Filament\Resources\ColumnResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListColumns extends ListRecords
{
    protected static string $resource = ColumnResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
