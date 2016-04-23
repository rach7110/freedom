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

    	\Mail::send('emails.contact', array(
    		'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
            ), function($message) 
    	{
    		$message->from('rachel.loziuk@gmail.com');
    		$message->to('rachel.loziuk@gmail.com')->subject('You have a new message from your portfolio');

    	});


    	return \Redirect::route('message')->with('message', 'Thanks for contacting me!');

    }
}
