<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    protected $table = 'ekstrakulikulers';
    protected $fillable = array('eskul' , 'hari' , 'keterangan' , 'prestasi_id');


    public function prestasi(){
        return $this->belongsTo('App\Prestasi', 'eskul_id');
    }
}
