<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TechExperience extends Model
{
    protected $table = 'tech_experiences';

    protected $fillable = [
        'experience_id',
        'title'
    ];

    public function experience(): BelongsTo
    {
        return $this->belongsTo(Experience::class);
    }
}
