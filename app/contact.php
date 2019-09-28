<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
     
    protected $fillable = [
        'name', 'email','phone_no','msg',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];



    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
    
}
