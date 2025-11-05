<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TechStack extends Model
{
    protected $table = 'tech_stacks';

    protected $fillable = [
        'project_id',
        'title'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
