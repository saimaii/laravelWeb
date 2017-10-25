<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PassengerAccount extends Model
{
    protected $table = 'passenger';

    public $timestamps = false;
    /**
     * Fields.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastname','username','statusId',
    ];

}



