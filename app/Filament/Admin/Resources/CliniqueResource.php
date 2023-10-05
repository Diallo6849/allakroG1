<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CliniqueResource\Pages;
use App\Filament\Admin\Resources\CliniqueResource\RelationManagers;
use App\Filament\Admin\Resources\CliniqueResource\Widgets\CliniqueWidget;
use App\Models\Clinique;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CliniqueResource extends Resource
{
    protected static ?string $model = Clinique::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                ->placeholder('Nom de la competence'),
                TextInput::make('service')
                    ->autofocus()
                    ->required()
                    ->placeholder('Service'),
                TextInput::make('lieu')
                    ->autofocus()
                    ->required()
                    ->placeholder('Lieu'),
                TextInput::make('contact')
                    ->type('number')
                    ->autofocus()
                    ->required()
                    ->placeholder('Contact'),
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
                TextColumn::make('service')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('lieu')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('contact')
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
            CliniqueWidget::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCliniques::route('/'),
            'create' => Pages\CreateClinique::route('/create'),
            'edit' => Pages\EditClinique::route('/{record}/edit'),
        ];
    }
}
