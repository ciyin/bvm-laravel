<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
    protected $fillable=[
        'cover','saved_at'
    ];

    public function version(){
        return $this->belongsTo('App\Version');
    }

}
