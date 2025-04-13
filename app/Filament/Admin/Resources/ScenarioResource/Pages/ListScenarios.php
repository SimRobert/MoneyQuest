<?php

namespace App\Filament\Admin\Resources\ScenarioResource\Pages;

use App\Filament\Admin\Resources\ScenarioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListScenarios extends ListRecords
{
    protected static string $resource = ScenarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
