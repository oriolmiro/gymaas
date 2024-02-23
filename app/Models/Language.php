<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'iso_code',
        'name',
    ];
    
    //Relación One-to-Many con la tabla del otro grupo, un lenguaje hace referencia a uno o mas ejercicios
    // public function modeloDelOtroGrupo()
    // {
    //     return $this->hasMany(modeloDelOtroGrupo::class);
    // }
}
