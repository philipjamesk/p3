@extends('layouts.master')

@section('title')
  User Generator
@stop

@section('content')
  @include('users.form')
  @if(count($errors) > 0)
    @include('includes.errors')
  @endif
@stop