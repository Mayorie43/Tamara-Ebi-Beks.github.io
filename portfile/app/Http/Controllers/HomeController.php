<?php

namespace App\Http\Controllers;

use App\Models\Contact; 
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        return view('pages.welcome');
    }
    //
    public function contact(){
        return view('pages.contact');
    }

    // public function dosend(Request $request){
    //     dd($request->all());
    // }


    public function dosend(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        


        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);
        return response()->json(['sucess' => 'Message sent successfully']);
    }
}
