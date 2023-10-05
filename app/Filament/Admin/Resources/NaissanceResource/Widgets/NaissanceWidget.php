<?php

namespace App\Filament\Admin\Resources\NaissanceResource\Widgets;

use App\Models\Naissance;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class NaissanceWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total des Naissances', Naissance::count())
            ->color('primary')
            ->description('L\'enregistrements des Naissances dans le village et aux alentours')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 5, -4, 15, -6, 20])
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
            Stat::make('Formulaires d\'enregistrements des Naissances', '')
            ->color('success')
            ->description('Pour ceux qui veulent utilisé le formulaire externe cliquer ici')
            ->icon('heroicon-m-user-plus')
            ->url('/naissance')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
            ]),
        ];
    }
}
