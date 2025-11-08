<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EducationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('college_name'),
                TextEntry::make('major'),
                TextEntry::make('start_date')
                    ->date(),
                TextEntry::make('end_date')
                    ->date(),
                TextEntry::make('grade_point_average'),
                TextEntry::make('educations.title')
                    ->label('Education Activity')
                    ->bulleted()
            ]);
    }
}
