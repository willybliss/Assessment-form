<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appraiser extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password',
    ];
 
    public function assessmentappraiser()
    {
        return $this->hasOne('App\Model\Assessment_Appraiser');
    }
}
