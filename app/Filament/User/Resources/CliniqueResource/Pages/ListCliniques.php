<?php

namespace App\Filament\User\Resources\CliniqueResource\Pages;

use App\Filament\User\Resources\CliniqueResource;
use App\Filament\User\Resources\CliniqueResource\Widgets\CliniqueWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCliniques extends ListRecords
{
    protected static string $resource = CliniqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            CliniqueWidget::class
        ];
    }
}
