<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupportRequestResource\Pages;
use App\Filament\Resources\SupportRequestResource\RelationManagers;
use App\Models\SupportRequest;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;

class SupportRequestResource extends Resource
{
    protected static ?string $model = SupportRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $label = 'طلب دعم';
    protected static ?string $pluralLabel = 'طلبات الدعم';

    public static function form(Form $form): Form
    {
        return $form

    
            ->schema([
                Card::make()
                ->schema([                   
                    TextInput::make('name')->label('الاسم')->required(), 
                    TextInput::make('id_number')->label('رقم الهوية')->required(), 
                    TextInput::make('mobile_number')->label('رقم الموبايل')->required(),
                    Select::make('house_type')->label('نوع السكن')
                        ->options([
                            'فيلا' => 'فيلا',
                            'شقة' => 'شقة',
                            'بدروم' => 'بدروم',
                    ])->required(), 

                    Select::make('income')->label('الدخل')
                        ->options([
                            '1000-3000' => '1000-3000',
                            '3000-6000' => '3000-6000',
                            '6000-10000' => '60000-10000',
                    ])->required(),

                    TextInput::make('family_members_number')->label('عدد أفراد الأسرة')->required(), 
                    TextInput::make('address')->label('العنوان')->required()->columnSpan(3), 
                ])->columns(3),
                
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('الاسم'),
                TextColumn::make('id_number')->label('رقم الهوية'),
                TextColumn::make('mobile_number')->label('رقم الموبايل'),
                TextColumn::make('house_type')->label('نوع السكن'),
                TextColumn::make('income')->label('الدخل'),
                TextColumn::make('family_members_number')->label('عدد أفراد الأسرة'),
                TextColumn::make('address')->label('العنوان'),
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
            'index' => Pages\ListSupportRequests::route('/'),
            'create' => Pages\CreateSupportRequest::route('/create'),
            'edit' => Pages\EditSupportRequest::route('/{record}/edit'),
        ];
    }    
}
