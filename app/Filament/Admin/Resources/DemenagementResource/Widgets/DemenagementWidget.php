<?php

namespace App\Filament\Admin\Resources\DemenagementResource\Widgets;

use App\Models\Demenagement;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DemenagementWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total des Demenagements', Demenagement::count())
            ->color('primary')
            ->description('L\'enregistrements des Demenagements dans le village et aux alentours')
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
            Stat::make('Formulaires d\'enregistrements des Demenagements', '')
            ->color('success')
            ->description('Pour ceux qui veulent utilisé le formulaire externe cliquer ici')
            ->icon('heroicon-m-inbox-stack')
            ->url('/demenagement')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
            ]),
        ];
    }
}
