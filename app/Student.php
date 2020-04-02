<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['nama', 'nis','ttl','alamat','jk','phone','kelas','jurusan'];
    
    public function mapel()
    {
        return $this->belongsToMany('App\Mapel');
    }
}
