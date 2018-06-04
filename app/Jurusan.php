<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = array('jurusan' , 'ket' , 'kurikulum_id');

    public function kurikulum(){
        return $this->belongsTo('App\Kurikulum', 'kurikulum_id');
    }
    public function industri(){
        return $this->hasMany('App\Industri', 'industri_id');
    }
}
