<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EducationActivities extends Model
{
    protected $table = 'education_activities';

    protected $fillable = [
        'education_id',
        'title',
        'description'
    ];

    public function education(): BelongsTo
    {
        return $this->belongsTo(Education::class);
    }
}
