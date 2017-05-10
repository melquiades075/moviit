<?php

namespace App\Repositories;

use App\Models\Requests;

use App\Http\Controllers\Controller;

class RequestsRepository extends Controller
{

    private $requests;

    public function __construct()
    {

        $this->requests = new Requests();

    }

    public function getAllRequests()
    {

        $requestsList = $this->requests->orderBy('created_at', 'desc')->get();

        return $requestsList;

    }

    public function addRequest($controller,$action,$json)
    {

        $this->requests->create([

            'controller'    => $controller,

            'action'        => $action,

            'parameter'     => json_encode($json)

        ]);

        return $json;

    }

}