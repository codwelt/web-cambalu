<?php
namespace App;
use Cog\Laravel\Optimus\Facades\Optimus;
use Illuminate\Database\Eloquent\Model;
class Trabajo extends Model
{

    protected $table = "trabajos";

    protected $fillable = ["titulo","descripcion", "id_materia"];


    public function getIdCrypt()
    {
        return Optimus::encode($this->id);

    }

    public function materia()
    {
        return $this->belongsTo(Materia::class,"id_materia","id");
    }

    public function autor()
    {
        return $this->belongsTo(User::class,"id_user","id");
    }



}
