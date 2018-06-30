@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="flex-center position-ref full-height">
                <div class="container">
                    <h2>Статистика</h2>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Клиент</td>
                            <td>Статус</td>
                            <td>Тип</td>
                            <td>Модель</td>
                            <td>Серийный номер</td>
                            <td>Комментарий</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{ $service->service_id }}</td>
                                <td>{{ $service->name }} {{ $service->surname }} {{ $service->phone }}</td>
                                <td>@if ($service->status == 1)
                                    В ремонте
                                @elseif ($service->status == 2)
                                    Отремонтирован
                                @elseif ($service->status == 3)
                                    Завершен
                                @endif
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
                                <td>{{ $service->model }}</td>
                                <td>{{ $service->serial }}</td>
                                <td width="30%">{{ $service->comment }}</td>

                                <td><div class="btn-group btn-group-sm">
                                        <a href="/services/{{ $service->service_id }}" type="button" class="btn btn-primary" title="Посмотреть"><span class="glyphicon glyphicon-eye-open"></span></a>
                                        <a href="/services/edit/{{ $service->service_id }}" type="button" class="btn btn-primary" title="Редактировать"><span class="glyphicon glyphicon-edit"></span></a>
                                        <a href="/services/remove/{{ $service->service_id }}" type="button" class="btn btn-primary btn-danger" title="Удалить"><span class="glyphicon glyphicon-remove-sign"></span></a>
                                    </div></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection