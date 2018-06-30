<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['services'] = Services::getServices();
        return view('services',$data);
    }

    public function getService(Request $request, $id)
    {
        $service = Services::getService($id);
        $data['service'] = $service;
        return view('service',$data);
    }

    public function getForm(Request $request)
    {
        $data['services'] = $request->all();
        return view('addservice',$data);
    }

    public function addService(Request $request)
    {
        $services = $request->all();
        Services::addService($services);
        return view('success');
    }
}
