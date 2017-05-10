<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technicians extends Model
{

	protected $table='technicians';

    protected $fillable=['name','available'];

}
