<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serangan extends Model
{
    //
    protected $table = 'auth';

    protected $fillable = [
    	'notifikasi','updated_at'
    ];
}
