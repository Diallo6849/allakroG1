<?php

namespace App\Filament\Admin\Resources\NaissanceResource\Pages;

use App\Filament\Admin\Resources\NaissanceResource;
use App\Filament\Admin\Resources\NaissanceResource\Widgets\NaissanceWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNaissances extends ListRecords
{
    protected static string $resource = NaissanceResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            NaissanceWidget::class
        ];
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
