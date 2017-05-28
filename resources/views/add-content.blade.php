@extends('layouts.site')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Будущий сайт</h1>
            <p>Какая то стартовая информация</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">ссылка на чёнить &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="form">

                <form method="POST" action="{{route('articleStore')}}">
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Заголовок">
                    </div>
                    <div class="form-group">
                        <label for="alias">Псевдоним</label>
                        <input type="text" class="form-control" id="alias" name="alias" placeholder="Псевдоним">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Краткое описание</label>
                        <textarea class="form-control" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Полный текст</label>
                        <textarea class="form-control" name="text"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Записать</button>
                    <script>
                        'user_id'=Auth::user()->id
                    </script>
                    {{ csrf_field() }}

                </form>
            </div>
        </div>
    </div> <!-- /container -->
@endsection