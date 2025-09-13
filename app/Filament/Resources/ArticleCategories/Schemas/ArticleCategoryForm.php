<?php

namespace App\Filament\Resources\ArticleCategories\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ArticleCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Category Name')
                    ->required()
                    ->maxLength(255),

                ColorPicker::make('text_color')
                    ->label('Text Color')
                    ->required()
                    ->default('#000000'),

                ColorPicker::make('background_color')
                    ->label('Background Color')
                    ->required()
                    ->default('#ffffff'),
            ]);
    }
}
