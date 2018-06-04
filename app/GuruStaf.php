<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruStaf extends Model
{
    protected $fillable = array('nama' , 'mapel' , 'struktur_organisasi_id');
    
        public function struktur_organisasi(){
            return $this->belongsTo('App\StrukturOrganisasi', 'struktur_organisasi_id');
        }
}
