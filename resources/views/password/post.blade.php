@extends('layouts.master')

@section('title')
  Password Generator
@stop

@section('content')
  @include('password.form')
  <h3>{{ $password }}</h3>
@stop