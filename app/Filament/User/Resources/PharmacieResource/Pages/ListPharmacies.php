<?php

namespace App\Filament\User\Resources\PharmacieResource\Pages;

use App\Filament\User\Resources\PharmacieResource;
use App\Filament\User\Resources\PharmacieResource\Widgets\PharmacieWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPharmacies extends ListRecords
{
    protected static string $resource = PharmacieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            PharmacieWidget::class
        ];
    }
}
