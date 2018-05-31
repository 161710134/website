<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasis';
    protected $fillable = array('bidang_prestasi' , 'prestasi' , 'ket');

    
    public function ekstrakulikuler() {
        return $this->hasMany('App\Ekstrakulikuler', 'prestasi_id');
        
    }
}
