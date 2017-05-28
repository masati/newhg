@extends('layouts.site')
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
            <div class="row">
                <div class="col-md-3">
                    {{ $profile->name }}
                </div>
                <div class="col-md-3">
                    {{ $profile->email }}
                </div>
                <div class="col-md-3">

                </div>
            </div>
    </div>
@endsection