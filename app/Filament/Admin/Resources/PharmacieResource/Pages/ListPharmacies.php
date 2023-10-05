<?php

namespace App\Filament\Admin\Resources\PharmacieResource\Pages;

use App\Filament\Admin\Resources\PharmacieResource;
use App\Filament\Admin\Resources\PharmacieResource\Widgets\PharmacieWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPharmacies extends ListRecords
{
    protected static string $resource = PharmacieResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            PharmacieWidget::class
        ];
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
