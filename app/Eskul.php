<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $fillable = array('eskul' , 'hari' , 'keterangan' , 'profil_id');

    public function profil(){
        return $this->hasOne('App\Profil', 'profil_id');
    }
    public function prestasi(){
        return $this->belongsTo('App\Prestasi', 'prestasi_id');
    }
}
