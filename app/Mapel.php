<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    //
      protected $table = 'mapel';
    public function teacher(){
    	return $this->belongsTo('App\Teacher');
    }
}
