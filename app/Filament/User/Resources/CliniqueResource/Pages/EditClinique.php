<?php

namespace App\Filament\User\Resources\CliniqueResource\Pages;

use App\Filament\User\Resources\CliniqueResource;
use App\Filament\User\Resources\CliniqueResource\Widgets\CliniqueWidget;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClinique extends EditRecord
{
    protected static string $resource = CliniqueResource::class;

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
            CliniqueWidget::class
        ];
    }
}
