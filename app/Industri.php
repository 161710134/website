<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    protected $fillable = array('industri' , 'alamat' , 'jurusan_id');
    
        public function jurusan(){
            return $this->belongsTo('App\Jurusan', 'jurusan_id');
        }
}
