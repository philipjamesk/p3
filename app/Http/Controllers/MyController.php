<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to GET /
    */
    public function getIndex() {
        return view('index');
    }

    /**
     * Responds to requests to GET /lorem
     */
    public function getLorem() {
        return view('lorem');
    }
   
    /**
     * Responds to requests to POST /lorem
     */
    public function postLorem(Request $request) {
        
        $this->validate(
            $request,
            ['paragraphs' => 'integer|min:1|max:99']
        );

        $paragraphs = $request->input('paragraphs');

        return view('lorem')->with('paragraphs', $paragraphs);
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
        return view('users_post');
    }

    /**
     * Responds to requests to GET /password
     */
    public function getPassword() {
        return view('password');
    }

    /**
     * Responds to requests to POST /password
     */
    public function postPassword() {
        return view('password_post');
    }
}