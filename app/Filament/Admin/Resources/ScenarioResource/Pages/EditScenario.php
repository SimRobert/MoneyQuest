<?php

namespace App\Filament\Admin\Resources\ScenarioResource\Pages;

use App\Filament\Admin\Resources\ScenarioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScenario extends EditRecord
{
    protected static string $resource = ScenarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
