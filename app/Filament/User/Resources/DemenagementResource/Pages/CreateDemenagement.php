<?php

namespace App\Filament\User\Resources\DemenagementResource\Pages;

use App\Filament\Admin\Resources\DemenagementResource\Widgets\DemenagementWidget;
use App\Filament\User\Resources\DemenagementResource;
use App\Filament\User\Resources\DemenagementResource\Widgets\DemenagementWidget as WidgetsDemenagementWidget;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDemenagement extends CreateRecord
{
    protected static string $resource = DemenagementResource::class;
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    //end
    protected function getHeaderWidgets(): array
    {
        return [
            WidgetsDemenagementWidget::class
        ];
    }
}
