<?php

namespace App\Filament\User\Resources\AmenagementsResource\Pages;

use App\Filament\User\Resources\AmenagementsResource;
use App\Filament\User\Resources\AmenagementsResource\Widgets\AmenagementsWidget;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAmenagements extends EditRecord
{
    protected static string $resource = AmenagementsResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            AmenagementsWidget::class
        ];
    }
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
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
