<?php

namespace App\Filament\User\Resources;

use App\Filament\Admin\Resources\DeceResource\Widgets\DeceWidget;
use App\Filament\User\Resources\DeceResource\Pages;
use App\Filament\User\Resources\DeceResource\RelationManagers;
use App\Filament\User\Resources\DeceResource\Widgets\DeceWidget as WidgetsDeceWidget;
use App\Models\Dece;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeceResource extends Resource
{
    protected static ?string $model = Dece::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box-x-mark';
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
                    ->placeholder('nom du decede'),
                TextInput::make('pere')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom du pere du decede'),
                TextInput::make('mere')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom de la mere du decede'),
                Select::make('sexe')
                    ->options([
                        'Homme' => 'Homme',
                        'Femme' => 'Femme',
                    ])
                    ->native(false)
                    ->autofocus()

                    ->required()
                    ->placeholder('Sexe du decede'),
                TextInput::make('lieu')
                    ->autofocus()
                    ->required()
                    ->placeholder('lieu du deces'),
                DatePicker::make('date_deces')
                    ->autofocus()

                    ->required()
                    ->placeholder('Date de decès'),

                DatePicker::make('dateNaissance')
                    ->autofocus()

                    ->required()
                    ->placeholder('la date de naissance du defunt'),
                TextInput::make('maison')
                    ->autofocus()
                    ->required()
                    ->placeholder('Nom du lieu d\'habitation du defunt'),
                TextInput::make('cause')
                    ->autofocus()
                    ->required()
                    ->placeholder('Cause du decede'),
                TextInput::make('profession')
                    ->autofocus()
                    ->required()
                    ->placeholder('la profession du defunt'),
                FileUpload::make('image')->nullable()
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
                Tables\Columns\TextColumn::make('date_deces')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('maison')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cause')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('profession')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
        return[
            WidgetsDeceWidget::class
        ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDeces::route('/'),
            'create' => Pages\CreateDece::route('/create'),
            'edit' => Pages\EditDece::route('/{record}/edit'),
        ];
    }
}
