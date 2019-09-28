<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    protected $fillable = [
        'd_name', 'status', 'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'token',
    ];


    public function company(){
        return $this->hasOne("App\companies", 'c_id' , 'company_id');
    }

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
