<?php

namespace App\Filament\User\Resources\AmenagementsResource\Pages;

use App\Filament\User\Resources\AmenagementsResource;
use App\Filament\User\Resources\AmenagementsResource\Widgets\AmenagementsWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAmenagements extends ListRecords
{
    protected static string $resource = AmenagementsResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            AmenagementsWidget::class
        ];
    }


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
