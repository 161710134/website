<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    protected $fillable = ('nama' , 'jabatan' , 'jurusan_id');

    public function jurusan(){
        return $this->hasOne('App\Jurusan', 'jurusan_id');
    }
}
