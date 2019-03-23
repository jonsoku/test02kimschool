@extends('layouts.index')
@section('wrapper-title')
    <h2># Show</h2>
@endsection
@section('wrapper')
{{$notice->title}}
    {{$notice->description}}
    {{$notice->user->name}}
@endsection
