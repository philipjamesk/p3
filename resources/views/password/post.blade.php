@extends('layouts.master')

@section('title')
  Password Generator
@stop

@section('content')
  @include('password.form')
  <h3>Your password: <em>{{ $password }}</em></h3>
@stop