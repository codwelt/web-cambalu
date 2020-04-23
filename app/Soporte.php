<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
    protected $table = "soporte";
    protected $fillable = ["mensaje","user_id"];

    public function user()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }

}
