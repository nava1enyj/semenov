@extends('layouts.app')

@section('content')

    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up fs-3 rounded-circle">↑</i>
    </button>
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success">

                <li>{{ session('success') }}</li>

            </div>
        @endif
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



                                <a href="{{ route('robot-description' , $robot->id) }}">Подробнее</a>



                            </div>
                            @if(\Auth::user()->admin == 1)
                            <a href="{{ route('delete-robot' , $robot->id) }}" class="p-3 link link-danger">Удалить</a>
                            @endif
                        </div>
                    </div>
                @endforeach


            </div>


        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('js/scrollToTop.js') }}" defer></script>
    @endpush
@endsection
