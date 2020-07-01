<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller {

    public function getContact() {

        return view('contact');
    }

    public function saveContact(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        return back()->with('success', 'Thank you for contact us!');

    }
}
