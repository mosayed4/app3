<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //for insrt data in daatabeas 
    public function addNewAppmint (Request $request){
    
        $addNew = new Contact;
        $addNew->name = $request->name;
        $addNew->email = $request->email;
        $addNew->phone = $request->phone;
        $addNew->subject = $request->subject;
        $addNew->message = $request->message;
         
        $addNew->save();
      //   if(!Auth::login($addNew)
      //   ){ return Redirect::to('/login'); // for not not go to login 
  
      // } else{  return Redirect::to('/'); // for login 
  
          
      // }
      return redirect('/');
        
        
       }
  }
  

