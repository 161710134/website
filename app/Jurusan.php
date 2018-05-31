<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = array('jurusan' , 'ket' , 'struktur_organisasi_id');

    public function strukturorganisasi(){
        return $this->belongsTo('App\StrukturOrganissasi', 'struktur_organisasi_id');
    }
}
