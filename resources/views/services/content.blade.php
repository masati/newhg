@extends('layouts.site')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>{{ $service->title }}</h1>
            <p>{{ $service->desc }}</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">ссылка на чёнить &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
         @if(!is_null($service->img))
                <div>
                    <img src="{!! $service->img !!}"/>
                </div>
            @endif
        </div>
    </div> <!-- /container -->
@endsection
