<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    //
      protected $table = 'mapel';
      protected $fillable = ['kode','nama','teacher_id'];
    public function teacher(){
    	return $this->belongsTo('App\Teacher');
    }
}
