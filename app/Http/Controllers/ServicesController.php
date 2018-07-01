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

    public function index(Request $request)
    {
        $services = $request->all();
        if (isset($services['status'])) {
            $data['services'] = Services::getServices($services);
        } else {
            $data['services'] = Services::getServices();
        }

        return view('services',$data);
    }

    public function getService(Request $request, $id)
    {
        $data['request'] = $request;
        if (isset($request->success)) {
            if ($request->success == 1) {
                $request->success = 'Принят в ремонт';
            } elseif ($request->success == 2) {
                $request->success = 'Статус изменен';
            }
        }
        $data['service'] = Services::getService($id);
        $data['history'] = Services::getHistory($id);
        return view('service',$data);
    }

    public function getForm(Request $request)
    {
        $data['services'] = $request->all();
        return view('addservice',$data);
    }
    public function getFormStatus(Request $request)
    {
        $data['services'] = $request->all();
        return view('changestatus',$data);
    }

    public function addService(Request $request)
    {
        $services = $request->all();
        $id = Services::addService($services);
        return redirect('/services/'.$id.'?success=1');
    }
    public function changeStatus(Request $request, $id)
    {
        $data = $request->all();
        Services::changeStatus($data, $id);
        return redirect('/services/'.$id.'?success=2');
    }
}
