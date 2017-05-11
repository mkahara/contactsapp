<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public static function getAge(){
        $now = new Carbon();
        return $this->dob->diffInYears($now);
    }
}
