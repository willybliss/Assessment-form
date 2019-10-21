<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Assessment_Appraiser extends Model
{
    //
    public function appraiser()
    {
        return $this->belongsTo('App\Model\Appraiser');
    }
}
