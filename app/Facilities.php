<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    //
    protected $table= "facility";
    //
    protected $fillable =[
        'facility_name',
        'address',
        'bedcapacity',
        'county_id',
        'level'
    ];
}
