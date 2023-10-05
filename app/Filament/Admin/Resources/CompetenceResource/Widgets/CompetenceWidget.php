<?php

namespace App\Filament\Admin\Resources\CompetenceResource\Widgets;

use App\Models\Competence;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CompetenceWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total des Chercheurs d\'emplois', Competence::count())
            ->color('primary')
            ->description('L\'enregistrements des Chercheurs d\'emplois dans le village et aux alentours')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, -6, 5, -4, 15, 4, 8])
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
            Stat::make('Formulaires d\'enregistrements des Checheurs d\'emplois', '')
            ->color('success')
            ->description('Pour ceux qui veulent utilisé le formulaire externe cliquer ici')
            ->icon('heroicon-m-currency-euro')
            ->url('/competence')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
            ]),
        ];
    }
}
