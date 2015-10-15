@extends('layouts.master')

@section('title')
  User Generator
@stop

@section('content')
    <form method="POST" actions="/users">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <button type="submit" class="btn btn-primary">Generate Users</button>
    </form>
@stop