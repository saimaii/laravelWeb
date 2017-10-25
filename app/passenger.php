<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    use Notifiable;
    protected $fillable = [
        'passengerRoute_id', 'route', 'amount',
    ];
}
