@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Квитанция № <span style="font-weight: 800;">{{ $service->service_id }}</span></h2>
        <span>от 03.07.2018</span>
        <div class="row"> <table class="table table-striped">
                @if (isset($request->success))
                <div class="flex-center position-ref full-height">
                    <span style="color:green; font-weight: 800;">{{ $request->success }}</span>
                </div>
                @endif
                <h3>Информация о ремонте</h3>
                <tbody>

                <tr>
                    <td>
                        Имя и фамилия:
                    </td>
                    <td>
                        {{ $service->name }} {{ $service->surname }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Номер телефона:
                    </td>
                    <td>
                        {{ $service->phone }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Эл. почта
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
                        Производитель и модель
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
                        С чем обратился:
                    </td>
                    <td>
                        {{ $service->comment }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Комплектация:
                    </td>
                    <td>
                        {{ $service->equipment }}
                    </td>
                </tr>


                </tbody>
            </table>
            <p>Данная квитанция подтверждает сдачу устройства в ремонт в СЦ "Ф1 Сервис". Диагностика до 5 дней. Срок ремонта при наличии запчастей до 14 дней. В случае отсутствия у поставщиков необходимы деталей, срок ремонта может быть продлен, или возвращен клиенту, по взаимному согласию.<br> В случае ремонта после диагностики: диагностика бесплатно. При отказе от ремонта — диагностика 120 грн.<br> Срок безоплатного хранения устройства 14 дней после ремонта, в последующие дни будет начислятся плата за хранение в размере 1,5% в день от стоимости ремонта. В случае, если устройство не будет забрано на протяжении 90 дней после завершения ремонта, оно будет засчитано на баланс сервисного центра, в счет оплаты ремонта и его хранения на протяжении данного времени. </p>
            Сервисный центр не берет на себя ответственность за сохранность информации, а также если в процессе ремонта выявится не заявленные в данной квитанции неполадки.
            <br>
            <br>
            <br>
            Подпись клиента (согласен с условиями ремонта)____________________________________________
        </div>
    </div>
@endsection