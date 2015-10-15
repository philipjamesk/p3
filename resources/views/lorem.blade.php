@extends('layouts.master')

@section('title')
  Lorem Ipsum
@stop

@section('content')
    <form method="POST" actions="/lorem">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <button type="submit" class="btn btn-primary">Generate Text</button>
    </form>
@stop