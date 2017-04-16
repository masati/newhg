@extends('layouts.site')

@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Будущий сайт</h1>
            <p>Какая то стартовая информация</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">ссылка на чёнить &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
         @if($article)

                <div>
                    <h2>{{$article->title}}</h2>
                    <p>{!!$article->text!!}</p>
                </div>

            @endif
        </div>

        <hr>

        <footer class="footer">
            <p>&copy; 2017 Company, Inc.</p>
        </footer>
    </div> <!-- /container -->
@endsection
