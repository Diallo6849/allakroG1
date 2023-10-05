<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MaladieResource\Pages;
use App\Filament\Admin\Resources\MaladieResource\RelationManagers;
use App\Filament\Admin\Resources\MaladieResource\Widgets\MaladieWidget;
use App\Models\Maladie;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MaladieResource extends Resource
{
    protected static ?string $model = Maladie::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-minus';

    // debut
    protected static ?string $activeNavigationIcon = 'heroicon-o-arrow-left-on-rectangle';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() < 10 ? 'primary' : 'success';
    }
    protected static ?string $navigationGroup = 'Santé';
    //fin
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                ->autofocus()
                ->required()
                ->placeholder('Nom de la maladie'),
                TextInput::make('description')
                    ->autofocus()
                    ->required()
                    ->placeholder('description de la maladie'),
                TextInput::make('type')
                    ->autofocus()
                    ->required()
                    ->placeholder('type de maladies'),
                DatePicker::make('date_contagion')
                    ->autofocus()
                    ->required()
                    ->placeholder('Date d\'aquisition de la maladie'),
                TextInput::make('mode_transmission')
                    ->autofocus()
                    ->required()
                    ->placeholder('mode de transmission'),
                TextInput::make('traitement')
                    ->autofocus()
                    ->required()
                    ->placeholder('traitement de la maladie'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('date_contagion')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('mode_transmission')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('traitement')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getWidgets(): array
    {
        return [
            MaladieWidget::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMaladies::route('/'),
            'create' => Pages\CreateMaladie::route('/create'),
            'edit' => Pages\EditMaladie::route('/{record}/edit'),
        ];
    }
}
