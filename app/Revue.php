<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Revue extends Model
{
    protected $table = 'revues';
    protected $fillable = ['auteur_id'];


    public function setAuteursAttribute($value)
    {
        $this->attributes['auteurs'] = json_encode($value);
    }
    public function getAuteursAttribute($value)
    {
        return $this->attributes['auteurs'] = json_decode($value);
    }


    public function auteur(){
        return $this->belongsTo('App\Auteur');
    }
    public function discipline(){
        return $this->belongsTo('App\Discipline');
    }
}
