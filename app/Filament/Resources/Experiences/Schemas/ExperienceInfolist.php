<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ExperienceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextEntry::make('company_name'),
                        TextEntry::make('occupation'),
                        TextEntry::make('start_date')->date(),
                        TextEntry::make('end_date')->date(),
                        TextEntry::make('description')->columnSpanFull(),
                        TextEntry::make('experiences.title')
                            ->label('Tech Stack')
                            ->bulleted(),
                    ])
                    ->columns(2)
            ]);
    }
}
