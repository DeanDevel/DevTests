<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Mail;

class ContactController extends Controller
{

  public function showForm(Request $request) {
    return view('contact');
  }

  public function storeForm(Request $request) {
      $this->validate($request, [ 

          'name' => 'required',
          'surname' => 'required',
          'idno' => 'required', 
          'phone' => 'required',
          'email' => 'required|email',
          'dob' => 'required', 
          'language' => 'required', 
          'interests' => 'required'

       ]);

      ContactUs::create($request->all());

       ///SEND TO ADMIN EMAIL
      \Mail::send('mail', array(

          'name' => $request->get('name'),
          'surname' => $request->get('surname'),
          'idno' => $request->get('idno'),
          'phone' => $request->get('phone'),
          'email' => $request->get('email'),
          'dob' => $request->get('dob'), 
          'language' => $request->get('language'), 
          'interests' => $request->get('interests'),


          ), function($message) use ($request){
            $message->from($request->email);
            $message->to('sendemail@toadmin.com', 'Hello Admin')->subject('someone sent you ADMIN and email');            
        });      

        ///SEND TO USER EMAIL
       \Mail::send('mail', array(

        'name' => $request->get('name'),
        'surname' => $request->get('surname'),
        'idno' => $request->get('idno'),
        'phone' => $request->get('phone'),
        'email' => $request->get('email'),
        'dob' => $request->get('dob'), 
        'language' => $request->get('language'), 
        'interests' => $request->get('interests'),


        ), function($message) use ($request){
          $message->from($request->email);
          $message->to($request->get('email'), $request->get('name'))->subject('your USER details have been captured');          
      });  

        

      return back()->with('success', 'Thanks for creating the persons details!');
  }

}