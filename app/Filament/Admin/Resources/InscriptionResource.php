<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\InscriptionResource\Pages;
use App\Filament\Admin\Resources\InscriptionResource\RelationManagers;
use App\Filament\Admin\Resources\InscriptionResource\Widgets\InscriptionWidget;
use App\Models\Inscription;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InscriptionResource extends Resource
{
    protected static ?string $model = Inscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';
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
    // protected static ?string $navigationGroup = 'Habitations';
    //fin

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez vtre nom'),
                TextInput::make('pere')
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez le nom de votre pere'),
                TextInput::make('mere')
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez le nom de votre mere'),
                Select::make('sexe')
                    ->options([
                        'Homme' => 'Homme',
                        'Femme' => 'Femme',
                    ])
                    ->native(false)
                    ->placeholder('Sexe'),
                TextInput::make('profession')
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez votre profession'),
                TextInput::make('profession_pere')
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez la profession de votre pere'),
                TextInput::make('profession_mere')
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez la profession de votre mere'),
                DatePicker::make('dateNaissance')
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez votre date de naissance'),
                DatePicker::make('dateAmenagement')
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez votre date d\'amenagement'),
                TextInput::make('nationalite')
                     ->autofocus()
                    ->required()
                    ->placeholder('Entrez votre nationnalite'),
                Select::make('niveau_etude')
                     ->autofocus()
                     ->options([
                        'M2' => 'M2',
                        'M1' => 'M1',
                        'L3' => 'L3',
                        'L2' => 'L2',
                        'L1' => 'L1',
                        'Terminale' => 'Terminale',
                        '1ere' => '1ere',
                        '2nde' => '2nde',
                        '3eme' => '3eme',
                        '4eme' => '4eme',
                        '5eme' => '5eme',
                        '6eme' => '6eme',
                        'CM2' => 'CM2',
                        'Autre' => 'Autre',
                     ])
                    ->native(false)
                    ->required()
                    ->placeholder('Entrez votre niveau d\'etude'),
                TextInput::make('adresse')
                     ->autofocus()
                    ->required()
                    ->placeholder('Entrez votre adresse'),
                TextInput::make('telephone')
                    ->numeric()
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez votre numero de telephone'),
                TextInput::make('email')
                    ->email()
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez votre email'),
                Select::make('situation_m')
                    ->autofocus()
                    ->options([
                        'Celibataire' => 'Celibataire',
                        'Divroce(e)' => 'Divroce(e)',
                        'Marie(e)' => 'Marie(e)',
                        'Voeuf(ve)' => 'Voeuf(ve)',
                    ])
                    ->native(false)
                    ->required()
                    ->placeholder('Entrez votre situation matrimoniale'),
                TextInput::make('nbre_enfant')
                    ->numeric()
                    ->autofocus()
                    ->required()
                    ->placeholder('Entrez votre nombre d\'emfants '),
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
                TextColumn::make('pere')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('mere')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('sexe')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('profession')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('profession_pere')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('profession_mere')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('dateNaissance')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('dateAmenagement')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('nationalite')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('niveau_etude')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('adresse')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('telephone')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('situation_m')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('nbre_enfant')
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
            InscriptionWidget::class
        ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInscriptions::route('/'),
            'create' => Pages\CreateInscription::route('/create'),
            'edit' => Pages\EditInscription::route('/{record}/edit'),
        ];
    }
}
