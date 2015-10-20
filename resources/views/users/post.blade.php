@extends('layouts.master')

@section('title')
  User Generator
@stop

@section('content')
  @include('users.form')
  <hr>
  @foreach ($users as $user)
    @foreach ($user as $key=>$value)
      <p><em>{{ $key }}:</em> {{ $value }}</p>
    @endforeach
    <hr>
  @endforeach
  <a href="/users/results" target="_blank"><button class="btn btn-primary">Get JSON</button></a>
@stop
