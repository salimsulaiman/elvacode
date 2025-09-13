<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('name')
                    ->label('Portfolio Name')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->directory('portfolio_thumbnails')
                    ->disk('public')
                    ->required(),

                Textarea::make('summary')
                    ->label('Summary')
                    ->required()
                    ->rows(2),

                RichEditor::make('content')
                    ->label('Content')
                    ->required(),

                Select::make('category_id')
                    ->label('Category')
                    ->required()
                    ->relationship('category', 'name')
                    ->searchable(),
            ]);
    }
}
