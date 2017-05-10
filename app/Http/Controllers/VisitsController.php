<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Repositories\VisitsRepository;

use App\Repositories\ClientsRepository;

use App\Repositories\RequestsRepository;

class VisitsController extends Controller
{

    private $visitsRepository;

    private $clientsRepository;

    private $requestsRepository;

    private $controller;

    public function __construct()
    {

        $this->clientsRepository  = new ClientsRepository();

        $this->visitsRepository   = new VisitsRepository();

        $this->requestsRepository = new RequestsRepository();

        $this->controller         = 'VisitsController';

    }

    public function index()
    {

        $visits   = $this->visitsRepository->getAllVisits(2);

        $clients  = $this->clientsRepository->getClientsList();

        $requests = $this->requestsRepository->getAllRequests();

        return view('templates.visits.index',compact('visits','clients','requests'));

    }

    public function clientsVisits(Request $request)
    {

        $visits   = $this->visitsRepository->getVisits($request->clientId,$request->maxNumber);
        
        $requests = $this->requestsRepository->addRequest($this->controller,'index',$visits);

        return $visits;
        
    }

    public function updateRequestTable()
    {

        $requests = $this->requestsRepository->getAllRequests();

        return $requests;
    }

}
