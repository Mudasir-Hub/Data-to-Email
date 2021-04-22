<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs as MailContactUs;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    
    public function getData(Request $request){

        $input = array(
            
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email, 
            'feedback' => $request->feedback,
            'message' => $request->message
        
        );

          Mail::to('test@test.com')->send(new MailContactUs($input));
        //return $input;
       // ContactUs::create($input);
        return redirect()->back();

    }
}
