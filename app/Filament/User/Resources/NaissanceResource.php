<?php

namespace App\Filament\User\Resources;

use App\Filament\Admin\Resources\NaissanceResource\Widgets\NaissanceWidget;
use App\Filament\User\Resources\NaissanceResource\Pages;
use App\Filament\User\Resources\NaissanceResource\RelationManagers;
use App\Filament\User\Resources\NaissanceResource\Widgets\NaissanceWidget as WidgetsNaissanceWidget;
use App\Models\Naissance;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NaissanceResource extends Resource
{
    protected static ?string $model = Naissance::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
// debut
protected static ?string $activeNavigationIcon = 'heroicon-o-arrow-left-on-rectangle';

protected static ?string $navigationGroup = 'Demographies';
//fin

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                ->autofocus()
                ->required()
                ->placeholder('Nom du nouveau ne'),
            TextInput::make('pere')
                ->autofocus()
                ->required()
                ->placeholder('Nom du Pere'),
            TextInput::make('mere')
                ->autofocus()
                ->required()
                ->placeholder('Nom de la Mere'),
            Select::make('sexe')
                ->options([
                    'Masculin'=>'Masculin',
                    'Feminin'=>'Feminin',
                ])
                ->native(false)
                ->autofocus()
                ->required()
                ->placeholder('Sexe'),
            TextInput::make('lieu')
                ->autofocus()
                ->required()
                ->placeholder('Lieu de naissance'),
            DatePicker::make('dateNaissance')
                ->autofocus()
                ->required()
                ->placeholder('Date de naissance'),
            TextInput::make('hopital')
                ->autofocus()
                ->required()
                ->placeholder('Nom de l\'hopital'),
            TextInput::make('maison')
                ->autofocus()
                ->required()
                ->placeholder('Nom de votre lieu d\'habitation'),

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
                Tables\Columns\TextColumn::make('nom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pere')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mere')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sexe')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lieu')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dateNaissance')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hopital')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('maison')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
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
            WidgetsNaissanceWidget::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNaissances::route('/'),
            'create' => Pages\CreateNaissance::route('/create'),
            'edit' => Pages\EditNaissance::route('/{record}/edit'),
        ];
    }
}
