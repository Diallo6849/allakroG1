<?php

namespace App\Filament\User\Resources\InscriptionResource\Pages;

use App\Filament\Admin\Resources\InscriptionResource\Widgets\InscriptionWidget;
use App\Filament\User\Resources\InscriptionResource;
use App\Filament\User\Resources\InscriptionResource\Widgets\InscriptionWidget as WidgetsInscriptionWidget;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInscription extends CreateRecord
{
    protected static string $resource = InscriptionResource::class;
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
