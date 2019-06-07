<?php

namespace App\Http\Controllers\Front;

use App\ContactQuery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactqueryController extends Controller
{
    public function contactdetails()
    {
        $contactquery = ContactQuery::get();
        // return $contactquery;
        return view('front.contact.show', compact('contactquery'));
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'email'=> 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contactquery = new ContactQuery;
        $contactquery->name = $request->name;
        $contactquery->email = $request->email;
        $contactquery->subject = $request->subject;
        $contactquery->message = $request->message;
        $contactquery->save();

        return view('front.contact.show');
    }
}
