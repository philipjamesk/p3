<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory;

class UsersController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
     * Responds to requests to GET /users
     */
    public function getUsers() {
        return view('users');
    }

    /**
     * Responds to requests to POST /users
     */
    public function postUsers() {
        $faker = Factory::create('en_US');
        // empty array for storing users
        $users = array();
        
        // hard code for now
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

        return view('users')->with('users', $users);
    }
}