<?php

namespace App\Filament\Admin\Resources\PharmacieResource\Pages;

use App\Filament\Admin\Resources\PharmacieResource;
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
}
