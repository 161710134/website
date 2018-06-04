<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    protected $fillable = array('pembelajaraan' , 'struktur_organisasi_id' , 'profil_id' , 'jurusan_id' , 'fasilitas_id');
    
        public function strukturorganisasi(){
            return $this->belongsTo('App\StrukturOrganissasi', 'struktur_organisasi_id');
        }
        public function jurusan(){
            return $this->hasMany('App\Jurusan', 'jurusan_id');
        }
        public function fasilitas(){
            return $this->hasMany('App\Fasilitas', 'fasilitas_id');
        }
}
