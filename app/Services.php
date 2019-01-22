<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "services";
    public $timestamps = false;

    public function users()
    {
    	return $this->belongsTo('App\Users', 'idUser','id');
    	
    }
}
