@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-3">
            <h3 class="text-center">
                Назвавние
            </h3>
            <div class="d-flex justify-content-center">

                <img src="" alt="">


            </div>
            <div class="text-break fs-5">Описание</div>
            <div class="mt-4">

                <form action="#">
                    <h3 class="text">Коментарии: </h3>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                    <button class="btn btn-primary mt-3">Оставить коментарий</button>
                </form>
                <div class="card mt-4 w-75">
                    <div class="p-3">
                            <div class="d-flex justify-content-between">

                                <h5>Ник: sdfgsdfg</h5>
                                <div>Дата: 2121413</div>
                            </div>

                            <div class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequatur cum cupiditate debitis delectus dicta enim eos facilis fugiat itaque laudantium minus modi molestiae molestias, numquam optio porro praesentium quae qui sed suscipit unde vero, voluptatibus! Facere nostrum perferendis provident quaerat sint vero voluptas! Aliquam amet atque cum cupiditate deleniti eius enim eos ipsum magni molestiae odit perspiciatis, quaerat quisquam ratione, reiciendis rerum sequi sint sunt vitae, voluptatem. Accusamus, consequuntur cumque dolore doloribus ducimus earum excepturi explicabo ipsam minima nam pariatur suscipit ut voluptatibus. A alias cum debitis distinctio dolorem esse, magni, minus odio officia placeat quos suscipit temporibus unde?s</div>


                    </div>
                </div>

            </div>

        </div>


    </div>


@endsection
