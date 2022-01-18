<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Contact;




//        .==.        .==.          
//       //`^\\      //^`\\         
//      // ^ ^\(\__/)/^ ^^\\        
//     //^ ^^ ^/6  6\ ^^ ^ \\       
//    //^ ^^ ^/( .. )\^ ^ ^ \\      
//   // ^^ ^/\| v""v |/\^ ^ ^\\     
//  // ^^/\/ /  `~~`  \ \/\^ ^\\    
//  -----------------------------
/// HERE BE DRAGONS

class ContactController extends Controller
{
    public function create(){
        return view('contact');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'content' => 'required'
        ]);

        Contact::create($validatedData);

        return ['message' => 'Contact Created'];
    }






    public function getdata(Request $request)
    {

        $showcontacts =  Contact::all();
        return view('home', compact('showcontacts'));

    }






}

// I am not responsible of this code.
// They made me write it.








