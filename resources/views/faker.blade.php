<?php
// require the Faker autoloader
// require_once '/fzaninotto/faker/src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
echo "Name: $faker->name<br>";
  // 'Lucy Cechtelar';
echo "Address: $faker->address<br>";
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
echo "Text: $faker->text";
  // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
  // et sit et mollitia sed.
  // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
  // sit minima sint.