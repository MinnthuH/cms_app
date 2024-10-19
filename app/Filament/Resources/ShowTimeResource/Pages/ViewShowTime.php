<?php

namespace App\Filament\Resources\ShowTimeResource\Pages;

use App\Filament\Resources\ShowTimeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewShowTime extends ViewRecord
{
    protected static string $resource = ShowTimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
