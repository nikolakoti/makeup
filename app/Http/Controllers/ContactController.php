<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller {

    public function index() {

        return view('front.contact.index');
    }

    public function process() {

        $request = request();

        $validator = \Validator::make($request->all(), [
                    'name' => 'required',
                    'email' => 'required|email',
                    'phone' => 'required',
                    'date' => 'required',
                    'message' => 'required'
        ]);

        if ($validator->fails()) {

            //sleep(2);
            return response()->json(['errors' => true, 'messages' => $validator->errors()->all()]);
        }
        //sleep(2);
        return response()->json(['success' => 'Uspesno ste poslali poruku']);
    }

}
