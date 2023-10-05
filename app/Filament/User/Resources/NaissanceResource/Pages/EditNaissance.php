<?php

namespace App\Filament\User\Resources\NaissanceResource\Pages;

use App\Filament\User\Resources\NaissanceResource;
use App\Filament\User\Resources\NaissanceResource\Widgets\NaissanceWidget;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNaissance extends EditRecord
{
    protected static string $resource = NaissanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    //end
    protected function getHeaderWidgets(): array
    {
        return [
            NaissanceWidget::class
        ];
    }
}
