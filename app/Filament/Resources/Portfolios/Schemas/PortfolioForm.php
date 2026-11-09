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
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                        'image/webp',
                    ])
                    ->maxSize(10240)
                    ->directory('portfolio_uploads')
                    ->disk('public')
                    ->visibility('public')
                    ->required(),

                FileUpload::make('preview_image')
                    ->label('Preview Website (Gambar Panjang)')
                    ->helperText('Screenshot full-page website, bentuk memanjang ke bawah.')
                    ->image()
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                        'image/webp',
                    ])
                    ->maxSize(10240)
                    ->directory('portfolio_uploads')
                    ->disk('public')
                    ->visibility('public'),

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
