<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable=['operation'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
