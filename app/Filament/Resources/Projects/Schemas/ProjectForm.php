<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('project_name')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                Textarea::make('image_path')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('video_path')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('project_path')
                    ->columnSpanFull(),
                TextInput::make('tech_stack')
                    ->required(),
            ]);
    }
}
