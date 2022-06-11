@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-3">
            <h3>Добавление робота:</h3>
            <hr>
            <form action="{{ route('add-robot') }}" method="POST" enctype="multipart/form-data">
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
                    <label for="name" class="form-label">Название</label>
                    <input type="text" class="form-control" name="name" id="name">

                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Фото робота</label>
                    <input type="file" class="form-control" name="image" id="image">

                </div>

                <label for="image" class="form-label">Описание робота</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="description"
                              id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Описаниние</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Добавить</button>
            </form>
        </div>
    </div>
@endsection
