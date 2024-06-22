<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BanerResource\Pages;
use App\Filament\Resources\BanerResource\RelationManagers;
use App\Models\Baner;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BanerResource extends Resource
{
    protected static ?string $model = Baner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('description')->required(),
                CuratorPicker::make('image_id')
                    ->disk('ftp')
                    // ->relationship('postImages', 'id')
                    ->required(),
                Select::make('is_active')->options([
                    true => 'Active',
                    false => 'Inactive',
                ])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                CuratorColumn::make('image_id')->circular()->size(50),
                TextColumn::make('description')->searchable(),
                CheckboxColumn::make('is_active')
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
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBaners::route('/'),
            'create' => Pages\CreateBaner::route('/create'),
            'edit' => Pages\EditBaner::route('/{record}/edit'),
        ];
    }
}
