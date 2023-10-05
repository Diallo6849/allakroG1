<?php

namespace App\Filament\User\Resources\MaladieResource\Pages;

use App\Filament\Admin\Resources\MaladieResource\Widgets\MaladieWidget;
use App\Filament\User\Resources\MaladieResource;
use App\Filament\User\Resources\MaladieResource\Widgets\MaladieWidget as WidgetsMaladieWidget;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMaladie extends CreateRecord
{
    protected static string $resource = MaladieResource::class;
    //debut : je l'ai ajouter pour la redirection en list apres avoir creer
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    //end
    protected function getHeaderWidgets(): array
    {
        return [
            WidgetsMaladieWidget::class
        ];
    }
}
