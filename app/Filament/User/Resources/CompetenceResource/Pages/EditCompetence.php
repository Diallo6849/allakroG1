<?php

namespace App\Filament\User\Resources\CompetenceResource\Pages;

use App\Filament\User\Resources\CompetenceResource;
use App\Filament\User\Resources\CompetenceResource\Widgets\CompetenceWidget;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompetence extends EditRecord
{
    protected static string $resource = CompetenceResource::class;

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
            CompetenceWidget::class
        ];
    }
}
