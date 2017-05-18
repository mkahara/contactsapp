<?php

namespace App;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use Sluggable;
    use SoftDeletes;
    //public $fillable = ['name'];
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    protected $dob;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
