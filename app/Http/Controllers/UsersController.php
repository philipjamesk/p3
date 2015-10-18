<?php

namespace App\Http\Controllers;

use Validator;
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
    public function postUsers(Request $request) {

        $messages = array('options.required' => 'At least one option must be selected.');
        
        $this->validate(
            $request,
            [ 'number' => 'required|integer|min:1|max:99',
              'options' => 'required'],
              $messages
        );

        $faker = Factory::create('en_US');

        $data = $request->all();
        $options = $data['options'];

        $users = array();
        $number_of_users = $data['number'];
        if (isset($data['options'])) {
            $options=$data['options'];
            for ($i=0; $i < $number_of_users; $i++) { 
                $user = array();
                if (in_array('name', $options)) {
                    $user['Name'] = $faker->name;
                }
                if (in_array('email', $options)) {
                    $user['Email'] = $faker->email;
                }
                if (in_array('username', $options)) {
                    $user['Username'] = $faker->username;
                }
                if (in_array('address', $options)) {
                    $user['Address'] = $faker->address;
                }
                if (in_array('phone', $options)) {
                   $user['Phone'] = $faker->phoneNumber;
                }
                array_push($users, $user);
            }
        } 

        $request->flash();

        return view('users')->with('users', $users)
                            ->with('options', $options);
    }
}