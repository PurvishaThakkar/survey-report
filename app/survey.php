<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    protected $fillable = [ 'comp_id','s_start_date','s_end_date','survey_title','desc','status',
     ];
 
 /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
 protected $hidden = [
      
     ];
    public function company(){
        return $this->hasOne("App\companies", 'c_id' , 'comp_id');
    }
    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
