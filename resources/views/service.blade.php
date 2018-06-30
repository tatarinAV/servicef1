@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>
                        Номер ремонта
                    </td>
                    <td>
                        {{ $service->service_id }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Клиент
                    </td>
                    <td>
                        {{ $service->name }} {{ $service->surname }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Телефон
                    </td>
                    <td>
                        {{ $service->phone }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Почта
                    </td>
                    <td>
                        {{ $service->email }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Тип устройства
                    </td>
                    <td>
                        {{ $service->type_id }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Модель
                    </td>
                    <td>
                        {{ $service->model }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Серийный номер
                    </td>
                    <td>
                        {{ $service->serial }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Комментарий
                    </td>
                    <td>
                        {{ $service->comment }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Комплектация
                    </td>
                    <td>
                        {{ $service->equipment }}
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection