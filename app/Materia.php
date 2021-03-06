<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = "materias";

    protected $fillable = ["nombre"];


    public function scopeFindByNombre($query,$value)
    {
        return $query->where("nombre", $value);
    }

    public function trabajos()
    {
        return $this->hasMany(Trabajo::class, "id_materia","id");
    }


}
