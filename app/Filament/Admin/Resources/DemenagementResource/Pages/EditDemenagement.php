<?php

namespace App\Filament\Admin\Resources\DemenagementResource\Pages;

use App\Filament\Admin\Resources\DemenagementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemenagement extends EditRecord
{
    protected static string $resource = DemenagementResource::class;
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
