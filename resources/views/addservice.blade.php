@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Принять в ремонт</h2>
    <form method="post" class="form-horizontal"  action="/add">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="sel1">Тип устройства:</label>
            <select class="form-control" id="sel1" name="type_id">
                <option value="1">Ноутбук</option>
                <option value="2">Планшет</option>
                <option value="3">Телевизор</option>
                <option value="4">Монитор</option>
                <option value="5">Принтер</option>
                <option value="6">Комплектующие</option>
            </select>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2 required" for="model">Модель:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="model" placeholder="Модель" name="model">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="serial">Серийный номер:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="serial" placeholder="Серийный номер" name="serial">
            </div>
        </div>
        <div class="form-group">
            <label for="comment">Заявленная неисправность (комментарии):</label>
            <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Заявленная неисправность (комментарий)"></textarea>
        </div>
        <div class="form-group">
            <label for="equipment">Комплектация:</label>
            <textarea class="form-control" rows="5" id="equipment" name="equipment" placeholder="Комплектация"></textarea>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Имя</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Имя" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="surname">Фамилия</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="surname" placeholder="Фамилия" name="surname">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="serial">Номер телефона:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone" placeholder="Номер телефона" name="phone">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Эл.почта</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Эл.почта" name="email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Принять в ремонт</button>
            </div>
        </div>
    </form>
</div>
@endsection