@extends('layouts.master')

@section('title')
  Lorem Ipsum
@stop

@section('content')
    <h1>The Lorem Ipsum You Requested</h1>
    <?php
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs(5);
        echo implode('<p>', $paragraphs);
    ?>
@stop