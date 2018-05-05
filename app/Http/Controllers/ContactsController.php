<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestValidator;
use App\Mail\ContactMailable;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

class ContactsController extends Controller
{
    public function create()
    {
    	//dd('lllll');
    	return view('contacts.create');
    }
    
    public function store(FormRequestValidator $request)
	{
		
		$message = Message::create($request->only('name','email','msg'));
		


	   
	    Mail::to(config('laracarte.email_admin'))->send(new ContactMessageCreated($message));
	    
	    Flashy::success('nous vous reondrons dans les plus bref délais');

    	return redirect()->route('root_path');
	}
	    
	    
}
