<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('company_name')
                            ->required(),
                        TextInput::make('occupation')
                            ->required(),
                        DatePicker::make('start_date')
                            ->format('d/m/Y'),
                        DatePicker::make('end_date')
                            ->format('d/m/Y'),
                        Textarea::make('description')
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Repeater::make('experiences')
                    ->relationship('experiences')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                    ])
            ]);
    }
}
