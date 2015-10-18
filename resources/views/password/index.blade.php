@extends('layouts.master')

@section('title')
  Password Generator
@stop

@section('content')
  @include('password.form')
  @include('includes.errors')
@stop