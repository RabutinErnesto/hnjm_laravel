<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Congres extends Model
{
    protected $table='congres';
    public function auteur(){
        return $this->belongsTo('App\Auteur');
    }
}
