<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question_types extends Model
{
    protected $fillable = [

        'type_name',
        
        ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         
        ];
}
