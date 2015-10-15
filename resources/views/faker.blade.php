@extends('layouts.master')

@section('title')
  User Generator
@stop

@section('content')
  <?php require('php/user-generator.php'); ?>

  @foreach ($users as $user)
    @foreach ($user as $key=>$value)
      <p>{{ $key }}: {{ $value }}</p>
    @endforeach
    <hr>
  @endforeach
@stop