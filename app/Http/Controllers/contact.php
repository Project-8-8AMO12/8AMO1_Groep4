<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS()
    {
        return view('contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
            'naam' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);
        ContactUS::create($request->all());
        return back()->with('success', 'Thanks for contacting us!');
    }

}
