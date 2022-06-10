<?php

namespace App;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $table='auteurs';

    public function revues(){
        $this->hasMany('App\Revue');
    }
}
