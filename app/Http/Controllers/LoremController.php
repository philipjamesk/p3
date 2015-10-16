<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum\Generator;

class LoremController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
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
        $generator = new Generator();
        $text = $generator->getParagraphs($paragraphs);

        return view('lorem')->with('paragraphs', $paragraphs)
                            ->with('text', $text);
    }
}