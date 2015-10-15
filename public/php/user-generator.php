  <?php
  // use the factory to create a Faker\Generator instance
  $faker = Faker\Factory::create('en_US');

  // empty array for storing users
  $users = array();
  
  $number_of_users = 10;

  for ($i=0; $i < $number_of_users; $i++) { 
    $user = array();
    $user['Name'] = $faker->name;
    $user['Address'] = $faker->address;
    $user['Email'] = $faker->email;
    $user['Phone'] = $faker->phoneNumber;
    $user['Username'] = $faker->username;
    $user['Password'] = $faker->password;
    array_push($users, $user);
  }
