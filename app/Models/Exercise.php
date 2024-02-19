<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BodyPart;
use App\Models\Equipment;
use App\Models\Target;

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

    /**
     * Get the body part that owns the exercise.
     */
    public function bodyPart()
    {
        return $this->belongsTo(BodyPart::class);
    }

    /**
     * Get the equipment that owns the exercise.
     */
    public function equipment(){
        return $this->belongsTo(Equipment::class);
    }
    /*
    * Get the target that owns the exercise.
    */
    public function target(){
        return $this->belongsTo(Target::class);
    }
}
