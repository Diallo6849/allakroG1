<?php

namespace App\Filament\Admin\Resources\MaladieResource\Pages;

use App\Filament\Admin\Resources\MaladieResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMaladie extends CreateRecord
{
    protected static string $resource = MaladieResource::class;
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
