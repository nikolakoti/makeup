<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactForm;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function index() {

        return view('front.contact.index');
    }

    public function process() {

        $request = request();

        $validator = \Validator::make($request->all(), [
                    'name' => 'required',
                    'email' => 'required|email',
                    'phone' => 'required|numeric',
                    'date' => 'required',
                    'message' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => true, 'messages' => $validator->errors()->all()]);
        }
        
        //send email logic
        
        $formData = $request->all();
        
        Mail::to('nikolakaljevic@gmail.com')->send(new ContactForm([
            
            'name' => $formData['name'],
            'email' => $formData['email'],
            'phone' => $formData['phone'],
            'date' => $formData['date'],
            'message' => $formData['message']
        ]));
        
        Mail::to($formData['email'])->send(new ConfirmationMail());
        
        return response()->json(['success' => 'Uspešno ste poslali poruku']);
    }

}
