<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $fillable = array('fasilitas' , 'ket' , 'kurikulum_id');
    
        public function kurikulum(){
            return $this->belongsTo('App\Kurikulum', 'kurikulum_id');
        }
}
