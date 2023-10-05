<?php

namespace App\Filament\User\Resources\CompetenceResource\Pages;

use App\Filament\User\Resources\CompetenceResource;
use App\Filament\User\Resources\CompetenceResource\Widgets\CompetenceWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompetences extends ListRecords
{
    protected static string $resource = CompetenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            CompetenceWidget::class
        ];
    }
}
