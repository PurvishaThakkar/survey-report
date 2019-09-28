<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{

    protected $fillable = [
        'name', 'email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token','password',
    ];
    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
