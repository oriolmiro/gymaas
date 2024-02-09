<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $table = 'exercises';

    protected $fillable = [
        'name',
        'gif',
        'secondary_muscles',
        'instructions',
        'lang',
        'body_part_id',
        'equipment_id',
        'target_id',
        'exercise_id'
    ];
}
