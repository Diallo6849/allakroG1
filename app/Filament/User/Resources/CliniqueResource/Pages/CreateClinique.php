<?php

namespace App\Filament\User\Resources\CliniqueResource\Pages;

use App\Filament\Admin\Resources\CliniqueResource\Widgets\CliniqueWidget;
use App\Filament\User\Resources\CliniqueResource;
use App\Filament\User\Resources\CliniqueResource\Widgets\CliniqueWidget as WidgetsCliniqueWidget;
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
    //end
    protected function getHeaderWidgets(): array
    {
        return [
            WidgetsCliniqueWidget::class
        ];
    }

}
