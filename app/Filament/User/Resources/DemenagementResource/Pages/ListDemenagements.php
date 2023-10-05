<?php

namespace App\Filament\User\Resources\DemenagementResource\Pages;

use App\Filament\User\Resources\DemenagementResource;
use App\Filament\User\Resources\DemenagementResource\Widgets\DemenagementWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemenagements extends ListRecords
{
    protected static string $resource = DemenagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            DemenagementWidget::class
        ];
    }
}
