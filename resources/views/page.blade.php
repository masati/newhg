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
    @if (isset($message))
        {{ $message }}
    @endif
    <div class="row">
        @foreach($articles as $article)

            <div class="col-md-4">
                <h2>{{$article->title}}</h2>
                <p>{!!$article->desc!!}</p>
                @can('delete-post', $article)
                <p><a class="btn btn-default" href="{{route('articleShow',['id'=>$article->id])}}" role="button">Подробнее &raquo;</a></p>
                @endcan

            <form action="{{ route('articleDelete',['article' => $article->id]) }}" method="post">

                <!-- <input type="hidden" name="_method" value="DELETE">-->

                {{method_field('DELETE')}}

                {{ csrf_field() }}
                @can('delete-post', $article)
                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
                @endcan

            </form>
            </div>
        @endforeach
    </div>
    <hr>
</div> <!-- /container -->
@endsection
