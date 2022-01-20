@extends('default')

@section('content')
    <posts :posts='{{ $posts }}'></posts>
@endsection