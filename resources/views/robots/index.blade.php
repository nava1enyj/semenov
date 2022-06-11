@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-3">
            <div class="d-flex flex-wrap">


                <div class="col-4 ps-3 pe-3 pb-3">
                    <div class="card">
                        <div class="p-3">
                            <h5 class="text-center">
                                Назвавние
                            </h5>
                            <div class="d-flex justify-content-center">

                                <img src="" alt="">


                            </div>
                            <div class="text-break">Описание</div>
                            <div class="d-flex justify-content-center">

                                <a href="{{ route('robot-description') }}">Подробнее</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>



        </div>
    </div>
@endsection
