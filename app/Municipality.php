<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
   protected $fillable=[
		'department_id','nombre', 'observaciones'
	];
    
     public function department()
    {
        return $this->belongsTo(departments::Class);
    }
}
