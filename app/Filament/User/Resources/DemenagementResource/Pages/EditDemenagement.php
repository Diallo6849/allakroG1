<?php

namespace App\Filament\User\Resources\DemenagementResource\Pages;

use App\Filament\User\Resources\DemenagementResource;
use App\Filament\User\Resources\DemenagementResource\Widgets\DemenagementWidget;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemenagement extends EditRecord
{
    protected static string $resource = DemenagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    //end
    protected function getHeaderWidgets(): array
    {
        return [
            DemenagementWidget::class
        ];
    }
}
