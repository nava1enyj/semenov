@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-3">
            <div class="d-flex flex-wrap">

                @foreach($robots as $robot)
                    <div class="col-4 ps-3 pe-3 pb-3">
                        <div class="card">
                            <div class="p-3">

                                <h5 class="text-center border-bottom pb-2">
                                    {{ $robot->name }}
                                </h5>
                                <div class="d-flex justify-content-center">

                                    <img class="small-img rounded" src="{{ '/storage/' . $robot->image }}" alt="">


                                </div>
                                <div class="text-break pt-3 text-hidden-home-page">{{ $robot->description }}</div>



                                    <a href="{{ route('robot-description') }}">Подробнее</a>



                            </div>

                        </div>
                    </div>
                @endforeach


            </div>

            <h3 class="text-center mt-3">Перейдите что посмотреть всех роботов:</h3>
            <div class="d-flex justify-content-center">

                <a href="{{ route('robots') }}" class="btn btn-primary w-25 mt-1">Все роботы</a>
            </div>

        </div>
    </div>
@endsection
