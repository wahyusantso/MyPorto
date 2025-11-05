<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'project_name',
        'category',
        'description',
        'image_path',
        'video_path',
        'project_path',
    ];

    public function features(): HasMany
    {
        return $this->hasMany(Features::class);
    }

    public function techs(): HasMany
    {
        return $this->hasMany(TechStack::class);
    }
}
