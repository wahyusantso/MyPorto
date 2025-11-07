<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Experience extends Model
{
    protected $table = 'experiences';

    protected $fillable = [
        'company_name',
        'occupation',
        'start_date',
        'end_date',
        'description',
    ];

    //casting field dari string ke carbon
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function experiences(): HasMany
    {
        return $this->hasMany(TechExperience::class);
    }
}
