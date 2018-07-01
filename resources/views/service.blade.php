@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row"> <table class="table table-striped">
                <h2>Информация о ремонте</h2>
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
                <tr>
                    <td>
                        Доп.комментарий
                    </td>
                    <td>
                        {{ $service->user_comment }}
                    </td>
                </tr>

                </tbody>
            </table>
            <div class="btn-group">
                <a href="/services/print/add/{{ $service->service_id }}" class="btn btn-success">Распечатать приемку</a>
                <a href="/services/print/return/{{ $service->service_id }}" class="btn btn-success">Распечатать акт выдачи</a>
                <a href="/services/status/{{ $service->service_id }}" class="btn btn-primary">Изменить статус</a>
                <a href="/services/edit/{{ $service->service_id }}" class="btn btn-primary">Редактировать</a>
                <a href="/services/delete/{{ $service->service_id }}" class="btn btn-danger ">Удалить</a>
            </div>
        </div>
        @if(isset($history) && $history)
            <div class="row">
                <h2>История статусов</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>Статус</td>
                        <td>Комментарий</td>
                        <td>Оператор</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($history as $item)
                        <tr>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->comment }}</td>
                            <td>{{ $item->operator_id }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection