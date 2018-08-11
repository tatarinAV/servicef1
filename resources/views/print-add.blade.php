@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Квитанція № <span style="font-weight: 800;">{{ $service->service_id }}</span></h2>
        <span>від {{ $service->created_at }}</span>
        <div class="row"> <table class="table table-striped">
                @if (isset($request->success))
                <div class="flex-center position-ref full-height">
                    <span style="color:green; font-weight: 800;">{{ $request->success }}</span>
                </div>
                @endif
                <tbody>

                <tr>
                    <td>
                        Замовник:
                    </td>
                    <td>
                        {{ $service->name }} {{ $service->surname }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Номер телефону:
                    </td>
                    <td>
                        {{ $service->phone }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Эл. пошта (не обов’язково)
                    </td>
                    <td>
                        {{ $service->email }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Тип пристрою
                    </td>
                    <td>
                        @if ($service->type_id == 1)
                            Ноутбук
                        @elseif ($service->type_id == 2)
                            Планшет
                        @elseif ($service->type_id == 3)
                            Телевізор
                        @elseif ($service->type_id == 4)
                            Монітор
                        @elseif ($service->type_id == 5)
                            Принтер
                        @elseif ($service->type_id == 6)
                            Комплектуючі або інше
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        Пристрій
                    </td>
                    <td>
                        {{ $service->model }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Серійний номер
                    </td>
                    <td>
                        {{ $service->serial }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Заявлені недоліки та коментарі
                    </td>
                    <td>
                        {{ $service->comment }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Комплектація та первинний огляд зовнішнього вигляду та стану пристрою:
                    </td>
                    <td>
                        {{ $service->equipment }}
                    </td>
                </tr>


                </tbody>
            </table>
            <p><b>УВАГА!</b> Якщо Ви втратили цю квитанцію, негайно повідомте про це Виконавця. Інші умови виконання робіт описані на звороті. </p>


            <p>Вартість діагностики у разі відмови замовника( його представника) від подальшого негарантійного ремонту в розмірі ____________ грн. погоджено.
                <br>
            <br>
            <br>
            <table style="width:100%; float:right;">
                <tr>
                    <td width="60%"></td>
                    <td>Від замовника</td>
                    <td>Від виконавця</td>
                </tr>
                <tr style="line-height: 5;">
                    <td></td>
                    <td>_______________________</td>
                    <td>_______________________</td>
                </tr>
            </table>
        </div>

        <hr style="border-top: 1px dashed black;" />

        <h2>Квитанція № <span style="font-weight: 800;">{{ $service->service_id }}</span></h2>
            <span>від {{ $service->created_at }}</span>
            <div class="row"> <table class="table table-striped">
                    @if (isset($request->success))
                        <div class="flex-center position-ref full-height">
                            <span style="color:green; font-weight: 800;">{{ $request->success }}</span>
                        </div>
                    @endif
                    <tbody>

                    <tr>
                        <td>
                            Замовник:
                        </td>
                        <td>
                            {{ $service->name }} {{ $service->surname }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Номер телефону:
                        </td>
                        <td>
                            {{ $service->phone }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Эл. пошта (не обов’язково)
                        </td>
                        <td>
                            {{ $service->email }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Тип пристрою
                        </td>
                        <td>
                            @if ($service->type_id == 1)
                                Ноутбук
                            @elseif ($service->type_id == 2)
                                Планшет
                            @elseif ($service->type_id == 3)
                                Телевізор
                            @elseif ($service->type_id == 4)
                                Монітор
                            @elseif ($service->type_id == 5)
                                Принтер
                            @elseif ($service->type_id == 6)
                                Комплектуючі або інше
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Пристрій
                        </td>
                        <td>
                            {{ $service->model }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Серійний номер
                        </td>
                        <td>
                            {{ $service->serial }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Заявлені недоліки та коментарі
                        </td>
                        <td>
                            {{ $service->comment }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Комплектація та первинний огляд зовнішнього вигляду та стану пристрою:
                        </td>
                        <td>
                            {{ $service->equipment }}
                        </td>
                    </tr>


                    </tbody>
                </table>



                <p>Вартість діагностики у разі відмови замовника( його представника) від подальшого негарантійного ремонту в розмірі ____________ грн. погоджено.
                    <br>
                    <br>
                    <br>
                <table style="width:100%; float:right;">
                    <tr>
                        <td width="60%"></td>
                        <td>Від замовника</td>
                        <td>Від виконавця</td>
                    </tr>
                    <tr style="min-height: 25px;">
                        <td>"Правильність заповнення квитанції підтверджую, з умовами виконання робіт погоджуюсь. <br>Зобов’язуюсь звернутися до виконавця не пізніше узгодженої дати завершення робіт"


                        </td>
                        <td>_______________________</td>
                        <td>_______________________</td>
                    </tr>
                </table>
            </div>

        <hr style="border-top: 1px dashed black;" />

            <h2 style="font-size:36px;">№ <span style="font-weight: 800;">{{ $service->service_id }}</span> - {{ $service->model }} - {{ $service->serial }}</h2>
            <span>Дата прийняття в ремонт: {{ $service->created_at }}</span>
            <br><span>Замовник: {{ $service->name }} {{ $service->surname }} - {{ $service->phone }}</span>

    </div>
    <div class="container">

    </div>
@endsection