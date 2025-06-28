<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        'tech_stack',
    ];
}
