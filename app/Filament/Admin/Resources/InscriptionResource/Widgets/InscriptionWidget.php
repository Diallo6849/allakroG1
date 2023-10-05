<?php

namespace App\Filament\Admin\Resources\InscriptionResource\Widgets;

use App\Models\Inscription;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class InscriptionWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total des Inscriptions', Inscription::count())
            ->color('primary')
            ->description('L\'enregistrements des Habitants dans le village Allakro et aux alentours')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([0, -5, 5, -4, 06, 4, 8])
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
            ]),
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
            Stat::make('Formulaires d\'enregistrements des Habitants', '')
            ->color('success')
            ->description('Pour ceux qui veulent utilisé le formulaire externe cliquer ici')
            ->icon('heroicon-m-adjustments-horizontal')
            ->url('/inscription')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
            ]),
        ];
    }
}
