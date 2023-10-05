<?php

namespace App\Filament\Admin\Resources\DeceResource\Pages;

use App\Filament\Admin\Resources\DeceResource;
use App\Filament\Admin\Resources\DeceResource\Widgets\DeceWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeces extends ListRecords
{
    protected static string $resource = DeceResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            DeceWidget::class
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
