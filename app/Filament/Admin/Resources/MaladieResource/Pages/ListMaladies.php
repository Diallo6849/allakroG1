<?php

namespace App\Filament\Admin\Resources\MaladieResource\Pages;

use App\Filament\Admin\Resources\MaladieResource;
use App\Filament\Admin\Resources\MaladieResource\Widgets\MaladieWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaladies extends ListRecords
{
    protected static string $resource = MaladieResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            MaladieWidget::class
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
