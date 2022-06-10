<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Revue extends Model
{
    protected $table = 'revues';


    public function auteurs(){
       return $this->belongsTo('App\Auteur');
    }
}
