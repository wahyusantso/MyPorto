<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('Project Information')
                            ->icon(Heroicon::BookOpen)
                            ->schema([
                                TextInput::make('project_name')
                                    ->required(),
                                TextInput::make('category')
                                    ->required(),
                                RichEditor::make('description')
                                    ->required()
                                    ->dehydrateStateUsing(fn($state) => strip_tags($state)), //untuk menghilangkan element html, agar tidak ikut terinput
                                FileUpload::make('image_path')->label('Project Thumbnail')
                                    ->required()
                                    ->disk('direct_public')
                                    ->visibility('public')
                                    ->directory('Projects')
                                    ->columnSpanFull(),
                                Textarea::make('video_path')->label('Youtube Url')
                                    ->required(),
                                Textarea::make('project_path')
                                    ->label('Url Live Demo'),
                            ]),
                        Tab::make('Features')
                            ->icon(Heroicon::CheckBadge)
                            ->schema([
                                Repeater::make('features')
                                    ->relationship('features')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required()
                                    ])
                            ]),
                        Tab::make('Tech Stack')
                            ->icon(Heroicon::Square3Stack3d)
                            ->schema([
                                Repeater::make('teck_stacks')
                                    ->relationship('techs')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required()
                                    ])
                            ])
                    ])->columnSpan('full')
            ]);
    }
}
