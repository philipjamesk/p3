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
        <input type="text" id="paragraphs" name="paragraphs" value={{ $paragraphs or '5' }}>
      </fieldset>
      <button type="submit" class="btn btn-primary">Generate Text</button>
  </form>

  @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
      <h3><span class="label label-danger">{{ $error }}</span></h3>
    @endforeach
  @endif
  

  @if ($_SERVER['REQUEST_METHOD'] == 'POST')
    <hr>
    <?php
      $generator = new Badcow\LoremIpsum\Generator();
      $text = $generator->getParagraphs($paragraphs);
      echo implode('<p>', $text); 
    ?>
  @endif
@stop