<?php

namespace App\Filament\User\Resources\MaladieResource\Pages;

use App\Filament\User\Resources\MaladieResource;
use App\Filament\User\Resources\MaladieResource\Widgets\MaladieWidget;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaladie extends EditRecord
{
    protected static string $resource = MaladieResource::class;

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
            MaladieWidget::class
        ];
    }
}
