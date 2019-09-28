<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $fillable = [
         'c_name', 'password','email','address','phone_no','no_of_emp','status',
    ];
    

    protected $primaryKey = 'c_id';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];
    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

    public function posts()
    {
        return $this->hasMany('App\employees');
    }

    public function departments()
    {
        return $this->hasMany('App\departments', 'company_id', 'c_id');
    }
}
