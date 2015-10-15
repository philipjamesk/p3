@extends('layouts.master')

@section('title')
  Password Generator
@stop

@section('content')
    <form method="POST" actions="/password">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <button type="submit" class="btn btn-primary">Generate Password</button>
    </form>
@stop