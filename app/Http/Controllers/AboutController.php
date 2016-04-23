<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ContactFormRequest;


class AboutController extends Controller
{

	// DISPLAY THE ABOUT PAGE
	public function create() {
		return view('contact');
	}

	// SEND THE CONTACT FORM
    public function store (ContactFormRequest $request) {
    	return \Redirect::route('message')->with('message', 'Thanks for contacting us!');

    }
}
