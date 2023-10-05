<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(Request $request){
        $request->validate([
            'nom'=>'required',
            'email'=>'required',
            'descruption'=>'required',
        ]);

        $contacts = new Contact();
        $contacts->nom = $request->nom;
        $contacts->email = $request->email;
        $contacts->descruption = $request->descruption;

        $contacts->save();

        return redirect()->back()->with('status', 'Merci de nous avoir contactez');
    }
}
