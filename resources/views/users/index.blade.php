@extends('layouts.master')

@section('title')
  User Generator
@stop

@section('content')
  @include('users.form')
  @include('includes.errors')
@stop

@section('scripts')
  <script src="/js/users.js" ></script>
@stop