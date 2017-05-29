@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <h3>{{ Auth::user()->name }}, добро пожаловать на Beta Heroes Guide</h3>
    </div>
</div>
@endsection
