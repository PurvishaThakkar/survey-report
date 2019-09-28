<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $fillable = [
        'e_name', 'password','email','address','phone_no','status','dept_id','comp_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'password','remember_token',
    ];


    public function department(){
        return $this->hasOne("App\departments", 'id' , 'dept_id');
    }


    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
