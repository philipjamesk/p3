@extends('layouts.master')

@section('title')
  Lorem Ipsum
@stop

@section('content')
  @include('lorem.form')
  <hr>
  @foreach($text as $paragraph)
    <p>{{ $paragraph }}</p>
  @endforeach
@stop