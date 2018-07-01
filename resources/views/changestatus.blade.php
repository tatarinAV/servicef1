@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Изменить статус</h2>
    <form method="post" class="form-horizontal"  action="">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="status">Выберите статус:</label>
            <select class="form-control" id="status" name="status">
                <option value="1">В ремонте</option>
                <option value="2">Отремонтирован</option>
                <option value="3">Выдан клиенту</option>
            </select>
        </div>

        <div class="form-group">
            <label for="comment">Комментарий:</label>
            <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Заявленная неисправность (комментарий)"></textarea>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Изменить статус</button>
            </div>
        </div>
    </form>
</div>
@endsection