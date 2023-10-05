<?php

namespace App\Filament\User\Resources\DeceResource\Pages;

use App\Filament\Admin\Resources\DeceResource\Widgets\DeceWidget;
use App\Filament\User\Resources\DeceResource;
use App\Filament\User\Resources\DeceResource\Widgets\DeceWidget as WidgetsDeceWidget;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDece extends CreateRecord
{
    protected static string $resource = DeceResource::class;
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    //end
    protected function getHeaderWidgets(): array
    {
        return [
            WidgetsDeceWidget::class
        ];
    }
}
