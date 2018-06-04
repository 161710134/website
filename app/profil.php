<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    protected $fillable = array('judul' , 'visi_misi' , 'sejarah' , 'keunggulan' , 'kurikulum_id');
    
        public function kurikulum(){
            return $this->belongsTo('App\Kurikulum', 'kurikulum_id');
        }
        public function eskul(){
            return $this->belongsTo('App\Eskul', 'eskul_id');
        }
}
