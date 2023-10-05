<?php

namespace App\Filament\Admin\Resources\AmenagementsResource\Pages;

use App\Filament\Admin\Resources\AmenagementsResource;
use App\Filament\Admin\Resources\AmenagementsResource\Widgets\AmenagementsWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAmenagements extends ListRecords
{
    protected static string $resource = AmenagementsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    // on enregistrer le AmenagentsWidget

    protected function getHeaderWidgets(): array
    {
        return [
            AmenagementsWidget::class
        ];
    }
}
