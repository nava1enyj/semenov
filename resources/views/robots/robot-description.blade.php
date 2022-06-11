@extends('layouts.app')

@section('content')

    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up fs-3 rounded-circle">↑</i>
    </button>
    <div class="container">
        <div class="p-3">
            <h3 class="text-center mb-3 border-bottom">
                {{ $data->name }}
            </h3>
            <div class="d-flex justify-content-center">

                <img src="{{ '/storage/' . $data->image}}" class="rounded mb-3 middle-img border shadow-lg" alt="">


            </div>
            <div class="text-break fs-5">Описание: {{ $data->description }}</div>
            <div class="mt-4">

                <form action="{{ route('robot-description-add-message') }}" method="post">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">

                            <li>{{ session('success') }}</li>

                        </div>
                    @endif
                    @csrf

                    <input type="hidden" name="idPost" value="{{ $data->id }}">
                    <h3 class="text">Коментарии: </h3>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="message"
                                  id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                    <button class="btn btn-primary mt-3">Оставить коментарий</button>
                </form>
                @foreach($messages as $message)

                    <div class="card mt-4 w-75 mb-3">
                        <div class="p-3">
                            <div class="d-flex justify-content-between">

                                <h5>Ник: {{ $message->users['login'] }}</h5>
                                <div>Дата: {{ $message->created_at }}</div>
                            </div>
                            <div class="d-flex">

{{--                                <img class="avatar border shadow-lg me-3" src="{{ '/storage/' . $message->users['image'] }}" alt="">--}}
                                <div>
                                    <div class="mt-2">{{ $message->message }}</div>
                                </div>


                            </div>

                        </div>
                        <div class="d-flex justify-content-end">

                            @if($message->users['id'] == \Auth::user()->id or \Auth::user()->admin == 1)
                                <a href="{{ route('delete-message' , $message->id) }}"
                                   class="link link-danger me-2 mb-2">Удалить</a>
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
