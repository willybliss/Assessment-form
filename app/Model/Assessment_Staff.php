<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Assessment_Staff extends Model
{
    //

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
