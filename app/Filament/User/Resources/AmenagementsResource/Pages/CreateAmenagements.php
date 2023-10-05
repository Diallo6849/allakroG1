<?php

namespace App\Filament\User\Resources\AmenagementsResource\Pages;

use App\Filament\User\Resources\AmenagementsResource;
use App\Filament\User\Resources\AmenagementsResource\Widgets\AmenagementsWidget;
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
    protected function getHeaderWidgets(): array
    {
        return [
            AmenagementsWidget::class
        ];
    }

}
