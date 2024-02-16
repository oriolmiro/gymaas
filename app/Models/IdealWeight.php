<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class IdealWeight extends Model
{
    //use HasFactory;
    public function caculaPesoIdeal($height, $gender)
    {

        //paso el str a minúsculas y quito espacios 
        $gender = trim($gender);
        $gender = strtolower($gender);

        if ($height <= 0) { //si altura es 0 o menor
            throw new \InvalidArgumentException('La altura tiene que ser superior de 0');
            # code...
        }
        if ($gender != 'male' && $gender != 'female') { //si llega algo que no sea Male o Female
            throw new \InvalidArgumentException('El genero solo puede ser Male para hombres o Female para yeguas');
        }
        if ($gender === 'male') {//calculo el peso ideal hombres fórmula PesoIdeal = 50+2.3×(Alturaencm−60)
            return  $idealWeight = 50 + 2.3 * ($height -60);

        }
        if ($gender === 'female') {//calculo el peso ideal mujeres fórmula PesoIdeal=45.5+2.3×(Alturaencm−60)
           return $idealWeight = 45 + 2.3 * ($height -60);

        }
    }
}
