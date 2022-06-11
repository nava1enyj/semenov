@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <div class="text-center fs-3 mb-3">Добро пожаловать!</div>
                        <div class="d-flex">
                            <img class="rounded shadow-lg avatar mb-3 me-3" src="{{ '/storage/' . Auth::user()->image }}" alt="">
                            <div>

                                <div class="text">Имя: {{ Auth::user()->name }}</div>
                                <div class="text">Фамили: {{ Auth::user()->lastname }}</div>
                                <div class="text">Отчество: {{ Auth::user()->patronymic }}</div>
                                <div class="text">E-mail: {{ Auth::user()->email }}</div>
                                <div class="text">Логин: {{ Auth::user()->login }}</div>
                                <div class="text">Телефон: {{ Auth::user()->phone }}</div>
                            </div>
                        </div>


                        <form action="{{ route('profile-change-password') }}" method="post">
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
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Введите новый пароль:</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Еще раз:</label>
                                <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1">

                            </div>
                            <button class="btn btn-primary">Сменить пароль</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
