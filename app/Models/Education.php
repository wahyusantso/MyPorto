<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Education extends Model
{
    protected $table = 'education';

    protected $fillable = [
        'college_name',
        'major',
        'start_date',
        'end_date',
        'grade_point_average'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function educations(): HasMany
    {
        return $this->hasMany(EducationActivities::class);
    }
}
