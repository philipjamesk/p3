<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class PasswordController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
     * Responds to requests to GET /password
     */
    public function getPassword() {
        return view('password.index');
    }

    /**
     * Responds to requests to POST /password
     */
    public function postPassword(Request $request) {

        $messages = array('maximum.at_least' => 'Maximum length must be at least the minimum length.',
                          'case.required' => 'Please select a case.');

        Validator::extend('at_least', function($attribute, $value, $parameters)
        {
            if (isset($parameters[0])) {
                $other = $parameters[0];
                return intval($value) >= intval($other);
            } else {
              return true;
           }
        });

        $validator = Validator::make(
            $request->all(),
            ['number_of_words' => 'required|integer|min:4|max:12',
             'minimum' => 'required|integer|min:4|max:12',
             'maximum' => 'required|integer|min:4|max:12|at_least:'.$request['minimum'],
             'case' => 'required'],
             $messages
        );

        if ($validator->fails()) {
            return redirect('password')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Validation passed, make password
        $words = file_get_contents('data/wordlist.dat');
        $words = unserialize($words);
        
        // Empty password
        $password = "";
        
        // Set all variable from $request
        $number_of_words=$request['number_of_words'];
        $minimum=$request['minimum'];
        $maximum=$request['maximum'];
        $case = $request['case'];
        $seperator = $request['seperator'];

        // add string of random numbers if selected by user
        if (isset($request['add_number'])) {
            $number = '';
            for ($i = 0; $i < $request['numbers']; $i++) { 
                $number = (string)rand(0,9) . $number;
            }
            $password = $number . $seperator;
        }        

        // Put the length of the word list in a variable so count() is only run once
        $word_count = count($words) - 1;
        for ($i = 0; $i < $number_of_words; $i++) { 
            do {
                $index = rand(0,$word_count);
                # if the word does fall between the min and max lengths pick a new one
            } while (!(strlen($words[$index]) >= $minimum AND strlen($words[$index]) <= $maximum));

            # set the case of the word
            $word = setCase($words[$index], $i, $case);

            #concatenate word to password 
            $password = $password . $word;

            #add seperator
            if ($i < $number_of_words - 1) {
                $password = $password . $seperator;
            }
        }

        // add random characters if selected by user
        # add string of random characters if selected by user
        if (isset($request['add_char'])) {
            // random character array
            $randomChars = ['~','!','@','$','%','^','&','*','(',')','+','=','{','}','[',']','|',':',';','<','>','?'];
            $char = '';
            for ($i = 0; $i < $request['chars']; $i++) { 
                $char = $randomChars[rand(0,count($randomChars)-1)] . $char;
            }
            $password = $password . $seperator . $char;
        }

        $request->flash();
        return view('password.post')->with('password', $password);   
    }
}

/**
*  @desc converts selected word to user selected case 
*  @param string $word - word to be converted
*  @param int $wordNumber - position of word to be converted 
*  @return string - converted word
*/
function setCase($word, $word_number, $case) {
    if ($case == 'lowercase') {
      return strtolower($word); // converted to lowercase in case future word list contains capital letters
    } elseif ($case == 'camelcase') {
      $word = strtolower($word); 
      if ($word_number > 0) { // do not capitilize first word in camelCase
        $word = ucfirst($word); 
      }
      return $word;
    } else { // uppercase is selected
      return strtoupper($word);
    }
} 