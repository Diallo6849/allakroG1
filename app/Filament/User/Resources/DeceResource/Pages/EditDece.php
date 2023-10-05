<?php

namespace App\Filament\User\Resources\DeceResource\Pages;

use App\Filament\User\Resources\DeceResource;
use App\Filament\User\Resources\DeceResource\Widgets\DeceWidget;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDece extends EditRecord
{
    protected static string $resource = DeceResource::class;

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
            DeceWidget::class
        ];
    }
}
