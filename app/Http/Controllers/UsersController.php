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
        return view('users.index');
    }

    /**
     * Responds to requests to POST /users#results
     */
    public function postUsers(Request $request) {
        
        $messages = array('options.required' => 'At least one option must be selected.');

        $this->validate(
            $request,
            [ 'number' => 'required|integer|min:1|max:100',
              'options' => 'required'],
              $messages
        );

        $faker = Factory::create('en_US');

        $users = array();
        $number_of_users = $request['number'];    

        for ($i=0; $i < $number_of_users; $i++) { 
            $user = array();
            if ($request->has('options.name')) {
                $user['Name'] = $faker->name;
            }
            if ($request->has('options.email')) {
                $user['Email'] = $faker->email;
            }
            if ($request->has('options.username')) {
                $user['Username'] = $faker->username;
            }
            if ($request->has('options.address')) {
                $user['Address'] = $faker->address;
            }
            if ($request->has('options.phone')) {
               $user['Phone'] = $faker->phoneNumber;
            }
            array_push($users, $user);
        }
        
        if ($request['json']) {
            return response()->json($users);
        } else {
            $request->flash();
            return view('users.post')->with('users', $users);
        }
    }

}