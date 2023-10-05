<?php

namespace App\Filament\Admin\Resources\InscriptionResource\Pages;

use App\Filament\Admin\Resources\InscriptionResource;
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
}
