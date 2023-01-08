<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FamilyWorksResource\Pages;
use App\Filament\Resources\FamilyWorksResource\RelationManagers;
use App\Models\FamilyWorks;
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



class FamilyWorksResource extends Resource
{
    protected static ?string $model = FamilyWorks::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $label = 'عمل';
    protected static ?string $pluralLabel = 'أعمال الأسرة';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([                   
                    TextInput::make('title')->label('الموضوع')->required(), 
                    TextInput::make('description')->label('الوصف')->required(), 
                    FileUpload::make('images')->directory('family_works')->multiple()->label('الصور')->enableOpen()->enableDownload()->required(),  
                    FileUpload::make('clips')->directory('family_works')->label('مقاطع')->required(),  
                    
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('الموضوع'),
                TextColumn::make('description')->label('الوصف'),
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
            'index' => Pages\ListFamilyWorks::route('/'),
            'create' => Pages\CreateFamilyWorks::route('/create'),
            'edit' => Pages\EditFamilyWorks::route('/{record}/edit'),
        ];
    }    
}
