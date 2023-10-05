<?php

namespace App\Filament\User\Resources\NaissanceResource\Pages;

use App\Filament\Admin\Resources\NaissanceResource\Widgets\NaissanceWidget;
use App\Filament\User\Resources\NaissanceResource;
use App\Filament\User\Resources\NaissanceResource\Widgets\NaissanceWidget as WidgetsNaissanceWidget;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNaissance extends CreateRecord
{
    protected static string $resource = NaissanceResource::class;
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    //end
    protected function getHeaderWidgets(): array
    {
        return [
            WidgetsNaissanceWidget::class
        ];
    }
}
