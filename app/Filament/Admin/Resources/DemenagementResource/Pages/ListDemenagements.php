<?php

namespace App\Filament\Admin\Resources\DemenagementResource\Pages;

use App\Filament\Admin\Resources\DemenagementResource;
use App\Filament\Admin\Resources\DemenagementResource\Widgets\DemenagementWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemenagements extends ListRecords
{
    protected static string $resource = DemenagementResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            DemenagementWidget::class
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
