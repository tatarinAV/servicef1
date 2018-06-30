<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    static function getServices($data = array()) {
        if (!$data) {
            $services = DB::table('services')
                ->leftJoin('services_description', 'services.service_id', '=', 'services_description.service_id')
                ->leftJoin('clients', 'services.client_id', '=', 'clients.client_id')
                ->select('*','services_description.comment as comment')
                ->get();
        }
        return $services;
    }

    static function getService($service_id) {
        $service = DB::table('services')
            ->leftJoin('services_description', 'services.service_id', '=', 'services_description.service_id')
            ->leftJoin('clients', 'services.client_id', '=', 'clients.client_id')
            ->select('*','services_description.comment as comment')
            ->where('services.service_id', $service_id)
            ->first();
        return $service;
    }
    static function addService($data) {
        $client_id = DB::table('clients')->insertGetId(
               [
                    'name' => $data['name'],
                    'surname' => $data['surname'],
                    'phone' => $data['phone'],
                    'email' => $data['email'],
                    'comment' => ''
               ]
        );

        $service_id = DB::table('services')->insertGetId(
            [
                'operator_id' => 1,
                'client_id' => $client_id
            ]
        );

        DB::table('services_description')->insert(
            [
                'service_id' => $service_id,
                'type_id' => $data['type_id'],
                'model' => $data['model'],
                'serial' => $data['serial'],
                'comment' => $data['comment'],
                'equipment' => $data['equipment'],
            ]
        );
        return true;
    }
    private function getServiceDescription(){

    }
}
