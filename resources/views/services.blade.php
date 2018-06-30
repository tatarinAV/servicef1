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
                                <td>{{ $service->type_id }}</td>
                                <td>{{ $service->model }}</td>
                                <td>{{ $service->serial }}</td>
                                <td width="30%">{{ $service->comment }}</td>

                                <td><div class="btn-group btn-group-lg">
                                        <a href="/services/{{ $service->service_id }}" type="button" class="btn btn-primary" title="Посмотреть"><span class="glyphicons glyphicons-eye-open"></span></a>
                                        <a href="/services/delete/{{ $service->service_id }}" type="button" class="btn btn-primary" title="Редактировать"><span class="glyphicons glyphicons-edit"></span></a>
                                        <a href="/services/edit/{{ $service->service_id }}" type="button" class="btn btn-primary" title="Удалить"><span style="color:red;" class="glyphicons glyphicons-remove-sign"></span></a>
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