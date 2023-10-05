<?php

namespace App\Filament\User\Resources\MaladieResource\Pages;

use App\Filament\User\Resources\MaladieResource;
use App\Filament\User\Resources\MaladieResource\Widgets\MaladieWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaladies extends ListRecords
{
    protected static string $resource = MaladieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            MaladieWidget::class
        ];
    }
}
