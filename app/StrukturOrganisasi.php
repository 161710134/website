<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    protected $fillable = array('nama' , 'jabatan' , 'guru_staf_id');


    public function guru_staf(){
        return $this->hasMany('App\GuruStaf', 'guru_staf_id');
    }
}
