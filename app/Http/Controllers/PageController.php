<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
    
    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        
        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }
}
