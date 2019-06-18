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
                    'phone' => 'required|numeric',
                    'date' => 'required',
                    'message' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['errors' => true, 'messages' => $validator->errors()->all()]);
        }
        return response()->json(['success' => 'Uspešno ste poslali poruku']);
    }

}
