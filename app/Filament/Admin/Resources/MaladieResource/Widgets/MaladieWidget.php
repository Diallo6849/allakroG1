<?php

namespace App\Filament\Admin\Resources\MaladieResource\Widgets;

use App\Models\Maladie;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MaladieWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total des Maladies', Maladie::count())
            ->color('primary')
            ->description('L\'enregistrements des Maladies dans le village et aux alentours')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 5, -4, 15, 4, 1])
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
