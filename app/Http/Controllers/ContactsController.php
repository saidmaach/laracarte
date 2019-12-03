<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsFormRequest;
use App\Mail\ContactMessageCreated;
use App\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create(){
    	return View('contacts.create');
    }

    public function store(ContactsFormRequest $request){
    	$message=message::create($request->only(['name', 'email','message']));
        /*
        $message=new message();
        $message->name=$request->name;
        $message->email=$request->email;
        $message->message=$request->message;
        $message->save();
        */
        $mailable= new ContactMessageCreated($message);
        Mail::to('sa.maach@tpphoning.com')->send($mailable);
        session()->flash('notification', 'your request has been sent successfully !!');
        
        return redirect(route('home'));
    }
}
