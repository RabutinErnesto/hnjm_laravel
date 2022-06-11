<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class These_et_Memoire extends Model
{
    protected $table = 'these';
    public function discipline()
    {
        return $this->belongsTo('App\Discipline');
    }

    public function auteur()
    {
        return $this->belongsTo('App\Auteur');
    }
}
