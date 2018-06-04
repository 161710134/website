<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $fillable = array('bidang_eskul' , 'prestasi' , 'tgl_perolehan' , 'eskul_id');
    
        public function eskul(){
            return $this->hasMany('App\Eskul', 'eskul_id');
}
