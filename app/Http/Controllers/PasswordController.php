<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum\Generator;

class MyController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
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
        return view('password');
    }
}