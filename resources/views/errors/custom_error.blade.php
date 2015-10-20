@extends('layouts.master')

@section('title')
  Oops...
@stop

@section('content')
  <h2>An Error Occurred...</h2>
  <h3><span class="label label-warning error-message">{!! $message !!}</span></h3>
@stop