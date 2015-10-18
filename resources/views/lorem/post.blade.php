@extends('layouts.master')

@section('title')
  Lorem Ipsum
@stop

@section('content')
  @include('lorem.form')
  <hr>
  <p><?php echo implode('<p>', $text); ?></p>
@stop