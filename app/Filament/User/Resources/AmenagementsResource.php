<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\AmenagementsResource\Pages;
use App\Filament\User\Resources\AmenagementsResource\RelationManagers;
use App\Filament\User\Resources\AmenagementsResource\Widgets\AmenagementsWidget;
use App\Models\Amenagements;
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

class AmenagementsResource extends Resource
{
    protected static ?string $model = Amenagements::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    // debut
    protected static ?string $activeNavigationIcon = 'heroicon-o-arrow-left-on-rectangle';

    
    protected static ?string $navigationGroup = 'Habitations';
    //fin

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                ->autofocus()
                ->required()
                ->placeholder('Nom de l\'amenagement'),
                TextInput::make('tuteur')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom du tuteur'),
                TextInput::make('tutrice')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom de la tutrice'),
                Select::make('sexe')
                    ->options([
                        'Homme' => 'Homme',
                        'Femme' => 'Femme',
                    ])
                    ->native(false)
                    ->searchable()
                    ->placeholder('Sexe'),
                TextInput::make('profession')
                    ->autofocus()
                    ->required()
                    ->placeholder('Profession'),
                DatePicker::make('dateNaissance')
                    ->autofocus()
                    ->required()
                    // ->maxDate('today')
                    // ->minDate('01/01/1960')
                    // ->after('01/01/1960')
                    ->placeholder('Date de naissance'),
                DatePicker::make('dateAmenagement')
                    ->autofocus()
                    ->required()
                    ->placeholder('Date d\'amenagement'),
                TextInput::make('provenance')
                    ->autofocus()
                    // ->rules('max:3')
                    ->required()
                    ->placeholder('Provenance'),
                TextInput::make('destination')
                    ->autofocus()
                    ->required()
                    ->placeholder('Destination'),
                FileUpload::make('image')
                ->directory('images')
                ->storeFileNamesIn('original_filename')
                ->autofocus()
                ->required()
                ->placeholder('Image'),
            ])->columns(2);

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

                TextColumn::make('tuteur')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tutrice')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('sexe')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('profession')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('dateNaissance')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('dateAmenagement')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('provenance')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('destination')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
        return[
            AmenagementsWidget::class
        ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAmenagements::route('/'),
            'create' => Pages\CreateAmenagements::route('/create'),
            'edit' => Pages\EditAmenagements::route('/{record}/edit'),
        ];
    }
}
