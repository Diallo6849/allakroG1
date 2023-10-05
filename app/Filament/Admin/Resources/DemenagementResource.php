<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DemenagementResource\Pages;
use App\Filament\Admin\Resources\DemenagementResource\RelationManagers;
use App\Filament\Admin\Resources\DemenagementResource\Widgets\DemenagementWidget;
use App\Models\Demenagement;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemenagementResource extends Resource
{
    protected static ?string $model = Demenagement::class;
    // debut
    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';
    protected static ?string $navigationGroup = 'Habitations';
    protected static ?string $activeNavigationIcon = 'heroicon-o-arrow-left-on-rectangle';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() < 10 ? 'primary' : 'success';
    }
    //fin

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                ->autofocus()
                ->required()
                ->placeholder('Nom du demenagement'),
            Forms\Components\TextInput::make('tuteur')
                ->autofocus()
                ->required()
                ->placeholder('Nom du tuteur'),
            Forms\Components\TextInput::make('tutrice')
                ->autofocus()
                ->required()
                 ->placeholder('Nom de la tutrice'),
            Forms\Components\Select::make('sexe')
                ->options([
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ])
                ->native(false)
                ->placeholder('Sexe'),
            Forms\Components\TextInput::make('profession')
                ->autofocus()
                ->required()
                ->placeholder('Profession'),
            Forms\Components\DatePicker::make('dateNaissance')
                ->autofocus()
                ->required()
                ->placeholder('Date de demenagement'),
            Forms\Components\DatePicker::make('dateDemenagement')
                ->autofocus()
                ->required()
                ->placeholder('Date de demenagement'),
            Forms\Components\TextInput::make('provenance')
                ->autofocus()
                ->required()
                ->placeholder('Provenance'),
            Forms\Components\TextInput::make('destination')
                ->autofocus()
                ->required()
                ->placeholder('Destination'),
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
                Tables\Columns\TextColumn::make('nom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tuteur')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tutrice')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sexe')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('profession')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dateNaissance')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dateDemenagement')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('provenance')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('destination')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
            DemenagementWidget::class
        ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDemenagements::route('/'),
            'create' => Pages\CreateDemenagement::route('/create'),
            'edit' => Pages\EditDemenagement::route('/{record}/edit'),
        ];
    }
}
