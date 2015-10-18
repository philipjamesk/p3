@extends('layouts.master')

@section('title')
  User Generator
@stop

@section('content')
  <h2>Create Random Users</h2>
  <form method="POST" actions="/users">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <fieldset>
      <label for="number">How Many Users (1-99):</label>
      <input type="text" id="number" name="number" value={{ old('number', '10') }}>
    </fieldset>
    <h3>Options</h3>
    <fieldset>
      <label for="name">Name:</label>
      <input type="checkbox" name="options[name]" value="name" {{ old('options.name') ? "checked" : "" }}>
    </fieldset>
    <fieldset>
      <label for="email">Email:</label>
      <input type="checkbox" name="options[email]" value="email" {{ old('options.email') ? "checked" : "" }}>
    </fieldset>
    <fieldset>
      <label for="username">Username:</label>
      <input type="checkbox" name="options[username]" value="username" {{ old('options.username') ? 'checked' : '' }}>
    </fieldset>
    <fieldset>
      <label for="address">Address:</label>
      <input type="checkbox" name="options[address]" value="address" {{ old('options.address') ? 'checked' : '' }}>
    </fieldset>
    <fieldset>
      <label for="phone">Phone Number:</label>
      <input type="checkbox" name="options[phone]" value="phone" {{ old('options.phone') ? 'checked' : '' }}>
    </fieldset>
    <button type="submit" class="btn btn-primary">Generate Users</button>
  </form>
  
  @include('includes.errors')


  @if ($_SERVER['REQUEST_METHOD'] == 'POST')

    <hr>
    @foreach ($users as $user)
      @foreach ($user as $key=>$value)
        <p><em>{{ $key }}:</em> {{ $value }}</p>
      @endforeach
      <hr>
    @endforeach
  @endif

@stop