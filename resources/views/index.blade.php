@extends('layouts.master')

@section('title')
  Home Page
@stop

@section('content')
  <h1>Developer's Best Friend</h1>
  <p>Do you need some <a href="https://en.wikipedia.org/wiki/Lorem_ipsum">lorem ipsum</a> text for the website you are building? Use our <a href="/lorem">lorem impsum generator</a> to produce as much as you need!</p>
  <p>Or, if you are need some users for your database, you can create them using our <a href="/users">random user generator</a>. For your convenience you can output your random users as a JSON file for loading into your applicaiton.</p>
  <p>Finally, as a bonus, try our <a href="/password">xkcd style password generator</a> to create a more secure password for all of your password needs.</p>
@stop

