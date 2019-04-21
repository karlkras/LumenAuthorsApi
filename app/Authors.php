<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'gender',
        'country',
    ];
}
