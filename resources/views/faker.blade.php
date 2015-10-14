@extends('layouts.master')

@section('title')
  User Generator
@stop

@section('content')

  <?php
  // use the factory to create a Faker\Generator instance
  $faker = Faker\Factory::create();

  for ($i=0; $i < 5; $i++) { 
    // generate data by accessing properties
    echo "Name: $faker->name<br>";
    // 'Lucy Cechtelar';
    echo "Address: $faker->address<br>";
    // "426 Jordy Lodge
    // Cartwrightshire, SC 88120-6700"
    echo "Text: $faker->text<br>";
    // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
    // et sit et mollitia sed.
    // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
    // sit minima sint.
    echo "<hr>";
  }

  ?>
@stop