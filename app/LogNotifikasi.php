<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogNotifikasi extends Model
{
    //
    protected $table = 'notifikasi';

    protected $fillable = [
    	'id_session'
    ];
}
