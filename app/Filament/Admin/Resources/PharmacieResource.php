<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PharmacieResource\Pages;
use App\Filament\Admin\Resources\PharmacieResource\RelationManagers;
use App\Filament\Admin\Resources\PharmacieResource\Widgets\PharmacieWidget;
use App\Models\Pharmacie;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PharmacieResource extends Resource
{
    protected static ?string $model = Pharmacie::class;

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';

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
                ->placeholder('Nom de la pharmacie'),
                TextInput::make('adresse')
                    ->autofocus()
                    ->required()
                    ->placeholder('adresse'),
                TextInput::make('responsable')
                    ->autofocus()
                    ->required()
                    ->placeholder('responsable'),
                TextInput::make('telephone')
                    ->type('number')
                    ->autofocus()
                    ->required()
                    ->placeholder('telephone'),
                TextInput::make('email')
                    ->type('email')
                    ->autofocus()
                    ->required()
                    ->placeholder('email'),
                Select::make('statut')
                    ->options([
                        'Ouvert' => 'Ouvert',
                        'Fermé' => 'Fermé',
                    ])
                    ->native(false)
                    ->searchable()
                    ->placeholder('statut'),
                TimePicker::make('horaire_ouverture')
                    ->autofocus()
                    ->required()
                    ->placeholder('heure d\'ouverture '),
                TimePicker::make('horaire_fermeture')
                    ->autofocus()
                    ->required()
                    ->placeholder('heure de fermeture '),
                FileUpload::make('image')
                    ->directory('images')
                    ->storeFileNamesIn('original_filename')
                    ->autofocus()
                    ->required()
                    ->placeholder('Image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('nom')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('telephone')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('adresse')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('horaire_ouverture')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('horaire_fermeture')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            PharmacieWidget::class
        ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPharmacies::route('/'),
            'create' => Pages\CreatePharmacie::route('/create'),
            'edit' => Pages\EditPharmacie::route('/{record}/edit'),
        ];
    }
}
