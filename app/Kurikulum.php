<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    protected $fillable = array('pembelajaraan' , '' , 'struktur_organisasi_id');
    
        public function strukturorganisasi(){
            return $this->belongsTo('App\StrukturOrganissasi', 'struktur_organisasi_id');
        }
}
