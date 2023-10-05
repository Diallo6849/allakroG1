<?php

namespace App\Filament\Admin\Resources\CliniqueResource\Pages;

use App\Filament\Admin\Resources\CliniqueResource;
use App\Filament\Admin\Resources\CliniqueResource\Widgets\CliniqueWidget;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateClinique extends CreateRecord
{
    protected static string $resource = CliniqueResource::class;
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getHeaderWidgets(): array
    {
        return [
            CliniqueWidget::class
        ];
    }
}
