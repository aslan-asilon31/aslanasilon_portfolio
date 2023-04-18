<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_gallery',
        'name',
        'description',
        'tech_used',
        'project_url',
        'git_repo',
        'responsibility',
        'challenge',
        'accomplishment',
        'lesson_learned',
    ];
}
