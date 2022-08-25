<?php

Namespace App\Http\Controllers;
use App\Notifications\ContactFormMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Recipient;
Class ContactController extends Controller
{
//  public function show()
//  {
//   return view('contact.index');
//  }
public function mailContactForm(ContactFormRequest $message, Recipient $recipient)

 {      
  $recipient->notify(new ContactFormMessage($message));
  
//   return {'message': 'Thanks for your message! We will get back to you soon!'};
  return redirect()->back()->with('message', 'Thanks for your message! We will get back to you soon!');
 }
}