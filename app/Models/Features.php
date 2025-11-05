<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Features extends Model
{
    protected $table = 'features';

    protected $fillable = [
        'project_id',
        'title'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
