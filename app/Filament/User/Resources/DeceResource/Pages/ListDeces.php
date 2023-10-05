<?php

namespace App\Filament\User\Resources\DeceResource\Pages;

use App\Filament\User\Resources\DeceResource;
use App\Filament\User\Resources\DeceResource\Widgets\DeceWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeces extends ListRecords
{
    protected static string $resource = DeceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            DeceWidget::class
        ];
    }
}
