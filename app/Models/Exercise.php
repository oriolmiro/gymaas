<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BodyPart;
use App\Models\Equipment;
use App\Models\Target;
use Illuminate\Support\Facades\DB;

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

    protected $columnsToTranslate = [
        'name' => [
            'type' => 'string',
        ],
        'secondary_muscles' => [
            'type' => 'string',
        ], 
        'instructions' => [
            'type' => 'json',
        ],
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

    /** 
     * Return an array with pending exercises translations.
     * 
     * @param int $limit - Default 5 pending translations.
     * 
     * @return Array
     * */
    function getExercisesPendingTranslations(int $limit = 5) {
        // Check limit is not lower/equals than 0
        $limit = ($limit <= 0) ? 5 : $limit;

        // Generate WHERE conditions
        $where = '';
        $i = 0;

        foreach ($this->columnsToTranslate as $columnToTranslate => $attributes) {
            $prefix = ($i > 0) ? ' OR ' : '';

            // Check column type
            switch($attributes['type']) {
                case 'json':
                    $where .= $prefix . $columnToTranslate . " = '[]'";
                    break;

                case 'string':
                    $where .= $prefix . $columnToTranslate . " = ''";
                    break;
            }

            // Increment $i + 1
            $i++;
        }

        // Complete and execute query
        $query = 
            "SELECT * "
            . "FROM " . $this->table . " "
            . "WHERE " . $where . " " 
            . "LIMIT " . $limit . " ";
        
        return DB::select($query);
    }
}
