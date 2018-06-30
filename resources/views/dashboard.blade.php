@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Статистика</h2>

        <table class="table table-striped">
            <thead>
            <tr>
                <td></td>
                <td>Количество</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>В ремонте</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Получено устройств за месяц</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Отремонтировано за месяц</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Всего получено</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Всего отремонтировано</td>
                <td>40</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h2>Выберите действие</h2>
        <div class="row">
            <div class="flex-center position-ref full-height">
                <div class="btn-group-vertical">
                    <a href="/add" class="btn btn-primary">Принять на ремонт</a>
                    <a href="/services" class="btn btn-primary">Посмотреть текущие ремонты</a>
                    <a href="/services" class="btn btn-primary">Посмотреть все ремонты</a>
                    <a href="/services" class="btn btn-primary">Найти ремонт</a>
                </div>
            </div>
        </div>
    </div>
@endsection