<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommunicationResource\Pages;
use App\Filament\Resources\CommunicationResource\RelationManagers;
use App\Models\Communication;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;

class CommunicationResource extends Resource
{
    protected static ?string $model = Communication::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $label = 'اقتراح';
    protected static ?string $pluralLabel = 'اقتراحات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([                   
                    TextInput::make('name')->label('الاسم')->required(),
                    TextInput::make('email')->label('الايميل')->required(),
                    TextInput::make('subject')->label('الموضوع')->required(), 
                    Textarea::make('suggestion')->label('اقتراح')->required()->columnSpan(3), 
                ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('الاسم'),
                TextColumn::make('email')->label('الايميل'),
                TextColumn::make('subject')->label('الموضوع'),
                TextColumn::make('suggestion')->label('اقتراح'),
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
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCommunications::route('/'),
            'create' => Pages\CreateCommunication::route('/create'),
            'edit' => Pages\EditCommunication::route('/{record}/edit'),
        ];
    }    
}
