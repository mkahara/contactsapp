<?php

namespace App;
use Carbon\Carbon;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use Searchable;
    use SoftDeletes;
    protected $fillable = ['name'];
    protected $dates = ['deleted_at'];
    protected $dob;

}
