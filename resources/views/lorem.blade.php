@extends('layouts.master')

@section('title')
  Lorem Ipsum
@stop

@section('content')
  <h2>Free Placeholder Text</h2>
  <form method="POST" actions="/lorem">
      <input type="hidden" value="{{ csrf_token() }}" name="_token">
      <fieldset>
        <label for="paragraphs">Number of Paragraphs (1-99):</label>
        <input type="text" id="paragraphs" name="paragraphs" value={{ old('paragraphs', '5') }}>
      </fieldset>
      <button type="submit" class="btn btn-primary">Generate Text</button>
  </form>

  @include('includes.errors')
  
  @if ($_SERVER['REQUEST_METHOD'] == 'POST')
    <hr>
    <p><?php echo implode('<p>', $text); ?></p>
  @endif
@stop