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
                        @if ($service->type_id == 1)
                            Ноутбук
                        @elseif ($service->type_id == 2)
                            Планшет
                        @elseif ($service->type_id == 3)
                            Телевизор
                        @elseif ($service->type_id == 4)
                            Монитор
                        @elseif ($service->type_id == 5)
                            Принтер
                        @elseif ($service->type_id == 6)
                            Комплектующие
                        @endif
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
                <tr>
                    <td>
                        Статус ремонта
                    </td>
                    <td>
                        @if ($service->status == 1)
                            В ремонте (принят в ремонт)
                        @elseif ($service->status == 2)
                            Отремонтирован (готов к передаче клиенту)
                        @elseif ($service->status == 3)
                            Завершен (выдан клиенту)
                        @endif
                    </td>
                </tr>

            </tbody>
        </table>
        <div class="btn-group">
            <a href="/services/print/add/{{ $service->service_id }}" class="btn btn-success">Распечатать приемку</a>
            <a href="/services/print/return/{{ $service->service_id }}" class="btn btn-success">Распечатать акт выдачи</a>
            <a href="/services/change/{{ $service->service_id }}" class="btn btn-primary">Изменить статус</a>
            <a href="/services/edit/{{ $service->service_id }}" class="btn btn-primary">Редактировать</a>
            <a href="/services/delete/{{ $service->service_id }}" class="btn btn-danger ">Удалить</a>
        </div>
    </div>
@endsection