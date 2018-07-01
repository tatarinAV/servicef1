<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
        } elseif (isset($data['status'])) {
            $services = DB::table('services')
                ->leftJoin('services_description', 'services.service_id', '=', 'services_description.service_id')
                ->leftJoin('clients', 'services.client_id', '=', 'clients.client_id')
                ->select('*','services_description.comment as comment')
                ->where('services.status', $data['status'])
                ->get();
        }
        return $services;
    }

    static function getService($service_id) {
        $service = DB::table('services')
            ->leftJoin('services_description', 'services.service_id', '=', 'services_description.service_id')
            ->leftJoin('clients', 'services.client_id', '=', 'clients.client_id')
            ->select('*','services_description.comment as comment','clients.comment as user_comment')
            ->where('services.service_id', $service_id)
            ->first();
        return $service;
    }
    static function addService($data) {
        if (!isset($data['email'])) {
            $data['email'] = '';
        }
        if (!isset($data['comment'])) {
            $data['comment'] = '';
        }
        if (!isset($data['equipment'])) {
            $data['equipment'] = '';
        }
        if (!isset($data['surname'])) {
            $data['surname'] = '';
        }
        if (!isset($data['serial'])) {
            $data['serial'] = '';
        }
        if (!isset($data['user_comment'])) {
            $data['user_comment'] = '';
        }
        $client_id = DB::table('clients')->insertGetId(
               [
                    'name' => $data['name'],
                    'surname' => $data['surname'],
                    'phone' => $data['phone'],
                    'email' => $data['email'],
                    'comment' => $data['user_comment']
               ]
        );

        $service_id = DB::table('services')->insertGetId(
            [
                'operator_id' => Auth::id(),
                'client_id' => $client_id,
                'status' => '1',
            ]
        );
        DB::table('status_history')->insert(
            [
                'service_id' => $service_id,
                'status' => 1,
                'comment' => $data['comment'],
                'operator_id' => Auth::id()
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
    static function changeStatus($data, $id) {
        if (!isset($data['comment'])) {
            $data['comment'] = '';
        }
        DB::table('services')
            ->where('service_id', $id)
            ->update(['status' => $data['status'],]);
        DB::table('status_history')->insert(
            [
                'service_id' => $id,
                'status' => $data['status'],
                'comment' => $data['comment'],
                'operator_id' => Auth::id()
            ]
        );
        return true;
    }
    static function getHistory($service_id) {
        $history = DB::table('status_history')
            ->where('service_id', $service_id)
            ->get();
        return $history;
    }
}
