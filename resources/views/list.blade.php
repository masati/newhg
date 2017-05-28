@extends('layouts.site')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>{{ $title }}</h1>
        <p>{{ $description ?: '' }}</p>
        @if(isset($link))
            <p><a class="btn btn-primary btn-lg" href="{{ $link }}" role="button">{{ $linkTitle }}</a></p>
        @endif
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        @foreach($list as $item)
            <div class="col-md-4">
                <h2>{{ $item->title }}</h2>
                <p>{{ $item->desc }}</p>

                <p>
                    <a class="btn btn-default" href="{{ route($routeShow, ['id' => ($item->alias) ?: $item->id ]) }}" role="button">Подробнее &raquo;</a>
                </p>
            </div>
        @endforeach
    </div>
</div> <!-- /container -->
@endsection
