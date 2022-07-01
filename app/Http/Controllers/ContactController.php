<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request){

//        return $request;

        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required'
         ]);

//        Contact::create($request->all());




        Mail::to('yitzhaknjenga@gmail.com')->send(new ContactFormMail($data));

        $first_name = $request->first_name;

        return redirect()->back()->withSuccess('good');

    }
}
