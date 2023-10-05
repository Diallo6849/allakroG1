<?php

namespace App\Filament\User\Resources\MaladieResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MaladieWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            
            Stat::make('Developeurs', '')
            ->color('warning')
            ->url('/about-us')
            ->description('
            Mamadou Lamarana Diallo,
            N\'ZI Kouakou Fardon,
            TIEGBE Yao Ahoutou Privat,
            BONI Kirioua Benzamin
            ')
            ->icon('heroicon-m-code-bracket')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
            ]),
            Stat::make('Formulaires d\'enregistrements des Maladies', '')
            ->color('success')
            ->description('Pour ceux qui veulent utilisé le formulaire externe cliquer ici')
            ->icon('heroicon-m-user-minus')
            ->url('/maladie')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
            ]),
        ];
    }
}
