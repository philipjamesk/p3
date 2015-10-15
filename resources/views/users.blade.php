@extends('layouts.master')

@section('title')
  User Generator
@stop

@section('content')

  <form method="POST" actions="/users">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <button type="submit" class="btn btn-primary">Generate Users</button>
  </form>

  @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
      <h3><span class="label label-danger">{{ $error }}</span></h3>
    @endforeach
  @endif
  
  @if ($_SERVER['REQUEST_METHOD'] == 'POST')
    <hr>
    <?php require('php/user-generator.php'); ?>

    @foreach ($users as $user)
      @foreach ($user as $key=>$value)
        <p>{{ $key }}: {{ $value }}</p>
      @endforeach
      <hr>
    @endforeach
  @endif

@stop