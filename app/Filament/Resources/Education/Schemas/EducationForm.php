<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('college_name')
                    ->required(),
                TextInput::make('major')
                    ->required(),
                DatePicker::make('start_date')
                    ->displayFormat('d/m/Y')
                    ->required(),
                DatePicker::make('end_date')
                    ->displayFormat('d/m/Y')
                    ->required(),
                TextInput::make('grade_point_average')
                    ->required(),
                Repeater::make('educations')
                    ->label('Education Activity')
                    ->relationship()
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        Textarea::make('description')
                            ->required()
                    ])
            ]);
    }
}
