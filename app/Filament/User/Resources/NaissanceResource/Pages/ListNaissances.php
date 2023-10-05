<?php

namespace App\Filament\User\Resources\NaissanceResource\Pages;

use App\Filament\User\Resources\NaissanceResource;
use App\Filament\User\Resources\NaissanceResource\Widgets\NaissanceWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNaissances extends ListRecords
{
    protected static string $resource = NaissanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            NaissanceWidget::class
        ];
    }
}
