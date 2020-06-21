<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaliMurid extends Model
{
    //
    protected $table = 'walim';

    protected $fillable = ['gambar','student_id','nama_ayah','nama_ibu','nama_wali','alamat','phone','pekerjaan'];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
