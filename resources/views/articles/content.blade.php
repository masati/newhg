@extends('layouts.site')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->desc }}</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">ссылка на чёнить &raquo;</a></p>

            @if($authors->count() == 1)
                <h4>Автор: {{ $authors[0]->name }}</h4>
            @elseif($authors->count() > 1)
                <h4>Авторы:</h4>
                <ul>
                    @foreach($authors as $author)
                    <li>
                        {{  $author->name }}
                    </li>
                @endforeach
                </ul>
            @endif
            <h5>{{ is_null($article->published_at) ? '' : 'Опубликовано: ' . $article->published_at->format('H:i, d/m/Y') }}</h5>
            <h5>{{ is_null($article->updated_at) ? '' : 'Последее изменение: ' . $article->updated_at->format('H:i, d/m/Y') }}</h5>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
         @if($article)
                <div>
                    <p>{!!$article->text!!}</p>
                </div>
            @endif
        </div>
    </div> <!-- /container -->
@endsection
