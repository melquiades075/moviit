<?php

namespace App\Repositories;

use App\Models\Visits;

use App\Http\Controllers\Controller;


class VisitsRepository extends Controller
{
    private $visits;

    public function __construct()
    {

        $this->visits = new Visits();

    }

    public function getAllVisits()
    {

        return $this->visits->orderBy('date', 'desc')->get();

    }

    public function getVisits($clientId,$maxNumber)
    {

        $visits=$this->visits->where('clientId',$clientId)
                             ->take($maxNumber)
                             ->orderBy('date', 'asc')
                             ->get();

        $obj= array();

        foreach ($visits as $visit) {

            $message = [

                'date'              =>  $visit->date,

                'client'            =>  $visit->client->name,

                'technician'        =>  $visit->technician->name,

                'cost'              =>  $visit->cost,

                'waterUsage'        =>  $visit->waterUsage,     

                'electricityUsage'  =>  $visit->electricityUsage,

            ];

            array_push($obj, $message);

        }

    	return $obj;

    }
}