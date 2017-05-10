<?php

namespace App\Repositories;

use App\Models\Clients;

use App\Http\Controllers\Controller;


class ClientsRepository extends Controller
{
    private $clients;

    public function __construct()
    {

        $this->clients = new Clients();

    }

    public function getClientsList()
    {

        return $this->clients->lists('name', 'id');

    }		

}