<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ContactFormRequest;


class AboutController extends Controller
{

	// SEND THE CONTACT FORM
    public function store (ContactFormRequest $request) {

    	\Mail::send('emails.contact', array(
    		'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
            ), function($message) 
    	{
    		$message->from(config('mail.from.address'));
    		$message->to(config('mail.to.address'))->subject('You have a new message from your portfolio');

    	});


    	return \Redirect::route('message')->with('message', 'Thanks for contacting me!');

    }
}
