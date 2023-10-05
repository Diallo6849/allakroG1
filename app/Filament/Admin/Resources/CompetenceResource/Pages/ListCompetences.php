<?php

namespace App\Filament\Admin\Resources\CompetenceResource\Pages;

use App\Filament\Admin\Resources\CompetenceResource;
use App\Filament\Admin\Resources\CompetenceResource\Widgets\CompetenceWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompetences extends ListRecords
{
    protected static string $resource = CompetenceResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            CompetenceWidget::class
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
