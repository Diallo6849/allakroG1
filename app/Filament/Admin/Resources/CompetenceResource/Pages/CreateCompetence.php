<?php

namespace App\Filament\Admin\Resources\CompetenceResource\Pages;

use App\Filament\Admin\Resources\CompetenceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCompetence extends CreateRecord
{
    protected static string $resource = CompetenceResource::class;

     //debut : je l'ai ajouter pour la redirection en list apres avoir creer
     protected function getRedirectUrl(): string
     {
         return $this->getResource()::getUrl('index');
     }
     //end
}
