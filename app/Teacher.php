<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
     protected $fillable = ['kodeguru', 'nama', 'nig','phone','alamat','ttl','jk','status','pdf','gambar'];
     
      public function mapel(){
    	return $this->hasMany('App\Mapel');
    }
}
