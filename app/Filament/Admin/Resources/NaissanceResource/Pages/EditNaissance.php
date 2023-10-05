<?php

namespace App\Filament\Admin\Resources\NaissanceResource\Pages;

use App\Filament\Admin\Resources\NaissanceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNaissance extends EditRecord
{
    protected static string $resource = NaissanceResource::class;
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
