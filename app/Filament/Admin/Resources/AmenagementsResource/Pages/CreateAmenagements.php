<?php

namespace App\Filament\Admin\Resources\AmenagementsResource\Pages;

use App\Filament\Admin\Resources\AmenagementsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAmenagements extends CreateRecord
{
    protected static string $resource = AmenagementsResource::class;


    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    //end
}
