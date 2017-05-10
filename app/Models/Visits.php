<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    
	protected $table='visits';

    protected $fillable=['clientId','technicianId','date','waterUsage','electricityUsage','cost'];

    public function client()
    {

    	return $this->hasOne('App\Models\Clients','id','clientId');

    }

    public function technician()
    {

    	return $this->hasOne('App\Models\Technicians','id','technicianId');

    }

}
