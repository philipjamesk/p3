@extends('layouts.master')

@section('title')
  Lorem Ipsum
@stop

@section('content')
  @include('lorem.form')
  @include('includes.errors')
@stop