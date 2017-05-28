@extends('layouts.site')
@section('content')
<div class="container">
    <h4>{!! $exception->getMessage() !!}</h4>
</div>
@endsection