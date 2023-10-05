<?php

namespace App\Filament\Admin\Resources\CliniqueResource\Pages;

use App\Filament\Admin\Resources\CliniqueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClinique extends EditRecord
{
    protected static string $resource = CliniqueResource::class;
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
