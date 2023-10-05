<?php

namespace App\Filament\User\Resources\PharmacieResource\Pages;

use App\Filament\Admin\Resources\PharmacieResource\Widgets\PharmacieWidget as WidgetsPharmacieWidget;
use App\Filament\User\Resources\PharmacieResource;
use App\Filament\User\Resources\PharmacieResource\Widgets\PharmacieWidget ;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePharmacie extends CreateRecord
{
    protected static string $resource = PharmacieResource::class;
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    //end
    protected function getHeaderWidgets(): array
    {
        return [
            PharmacieWidget::class
        ];
    }
}
