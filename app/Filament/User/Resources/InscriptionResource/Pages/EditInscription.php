<?php

namespace App\Filament\User\Resources\InscriptionResource\Pages;

use App\Filament\Admin\Resources\InscriptionResource\Widgets\InscriptionWidget;
use App\Filament\User\Resources\InscriptionResource;
use App\Filament\User\Resources\InscriptionResource\Widgets\InscriptionWidget as WidgetsInscriptionWidget;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInscription extends EditRecord
{
    protected static string $resource = InscriptionResource::class;

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
            WidgetsInscriptionWidget::class
        ];
    }
}
