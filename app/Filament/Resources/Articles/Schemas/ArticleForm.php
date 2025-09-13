<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('title')
                    ->label('Article Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('excerpt')
                    ->label('Excerpt')
                    ->rows(3)
                    ->columnSpan(2),

                RichEditor::make('content')
                    ->label('Content')
                    ->columnSpan(2)
                    ->required(),

                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->directory('article_thumbnails')
                    ->disk('public')
                    ->columnSpan(2),

                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->required(),

                Select::make('author_id')
                    ->label('Author')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->required(),

                Radio::make('status')
                    ->label('Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])
                    ->default('draft'),

                DateTimePicker::make('published_at')
                    ->label('Published At')
                    ->columnSpan(2),
            ]);
    }
}
