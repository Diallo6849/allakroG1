<?php

namespace App\Filament\Admin\Resources\InscriptionResource\Pages;

use App\Filament\Admin\Resources\InscriptionResource;
use App\Filament\Admin\Resources\InscriptionResource\Widgets\InscriptionWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInscriptions extends ListRecords
{
    protected static string $resource = InscriptionResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            InscriptionWidget::class
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
