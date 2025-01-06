<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BoardingHouseResource\Pages;
// use App\Filament\Resources\BoardingHouseResource\RelationManagers;
use App\Models\BoardingHouse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
// use Filament\Forms\Compenents\Tabs;
// use Filament\Forms\Components\Select;
// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class BoardingHouseResource extends Resource
{
    protected static ?string $model = BoardingHouse::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Tabs')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('General Information')
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                        ->image()
                        ->directory('boarding-houses/thumbnail')
                        ->required()
                        ->columnSpan(2),

                        Forms\Components\TextInput::make('name')
                        ->required()
                        ->reactive()
                        ->debounce(200)
                        ->afterStateUpdated(function ($state, callable $set)  {
                            $set('slug', Str::slug($state));
                        })
                        ->columnSpan(1),

                        Forms\Components\TextInput::make('slug')
                        ->readOnly()
                        ->required()
                        ->columnSpan(1),

                        Forms\Components\RichEditor::make('description')
                        ->columnSpan(2),

                        Forms\Components\Select::make('city_id')
                        ->relationship('city', 'name')
                        ->required(),

                        Forms\Components\Select::make('category_id')
                        ->relationship('category', 'name')
                        ->required(),

                        Forms\Components\TextInput::make('price')
                        ->numeric()
                        ->prefix('Rp')
                        ->required()
                        ->columnSpan(2),

                        Forms\Components\TextArea::make('address')
                        ->required()
                        ->columnSpan(2),
                    ]),

                    Forms\Components\Tabs\Tab::make('Bonus')
                    ->schema([
                        Forms\Components\Repeater::make('bonuses')
                        ->relationship('bonuses')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                            ->required(),

                            Forms\Components\TextArea::make('description')
                            ->required(),

                            Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('bonuses')
                            ->required(),
                        ])
                    ]),

                    Forms\Components\Tabs\Tab::make('Rooms')
                    ->schema([
                        Forms\Components\Repeater::make('rooms')
                        ->relationship('rooms')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                            ->required(),

                            Forms\Components\TextInput::make('room_type')
                            ->required(),

                            Forms\Components\TextInput::make('square_feet')
                            ->numeric()
                            ->required(),

                            Forms\Components\TextInput::make('price_per_month')
                            ->numeric()
                            ->prefix('Rp')
                            ->required(),

                            Forms\Components\Toggle::make('is_available')
                            ->label('Available')
                            ->required(),

                            Forms\Components\Repeater::make('images')
                            ->relationship('images')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                ->image()
                                ->directory('room-images')
                                ->required(),
                            ])
                        ])
                    ])
                ])->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('city.name'),
                Tables\Columns\TextColumn::make('price')->label('Price (IDR)')
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
            'index' => Pages\ListBoardingHouses::route('/'),
            'create' => Pages\CreateBoardingHouse::route('/create'),
            'edit' => Pages\EditBoardingHouse::route('/{record}/edit'),
        ];
    }
}
