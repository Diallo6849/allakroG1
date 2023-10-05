<?php

namespace App\Filament\User\Resources\InscriptionResource\Pages;

use App\Filament\Admin\Resources\InscriptionResource\Widgets\InscriptionWidget;
use App\Filament\User\Resources\InscriptionResource;
use App\Filament\User\Resources\InscriptionResource\Widgets\InscriptionWidget as WidgetsInscriptionWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInscriptions extends ListRecords
{
    protected static string $resource = InscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            WidgetsInscriptionWidget::class
        ];
    }
}
