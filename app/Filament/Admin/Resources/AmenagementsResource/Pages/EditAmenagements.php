<?php

namespace App\Filament\Admin\Resources\AmenagementsResource\Pages;

use App\Filament\Admin\Resources\AmenagementsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAmenagements extends EditRecord
{
    protected static string $resource = AmenagementsResource::class;

    //debut je l'ai ajouter pour la redirection en list apres avoir editer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    //end
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
