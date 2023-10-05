<?php

namespace App\Filament\Admin\Resources\DeceResource\Pages;

use App\Filament\Admin\Resources\DeceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDece extends EditRecord
{
    protected static string $resource = DeceResource::class;
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
