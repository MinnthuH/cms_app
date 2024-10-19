<?php

namespace App\Filament\Resources\ShowTimeResource\Pages;

use App\Filament\Resources\ShowTimeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShowTime extends EditRecord
{
    protected static string $resource = ShowTimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
