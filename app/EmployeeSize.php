<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\EmployeeSize as Authenticable;

class EmployeeSize extends Model
{
   use Notifiable;
   protected $fillable = [

    'size',
    
    ];

/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
protected $hidden = [
     
    ];

}
