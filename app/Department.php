<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $fillable=[
		'nombre', 'observaciones'
	];
    
    public function municipalities()
    {
    
    	return $this->hasMany(Municipality::class);
    }
}
