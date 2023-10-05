<?php

namespace App\Http\Controllers;

use App\Http\Requests\CliniqueRequest;
use App\Models\Clinique;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class CliniqueController extends Controller
{
    public function index(){
       return view('clinique.create');
    }

    public function store(CliniqueRequest $request){

        $cliniques = new Clinique();
        $cliniques->nom = $request->nom;
        $cliniques->lieu = $request->lieu;
        $cliniques->service = $request->service;
        $cliniques->contact = $request->contact;
        $cliniques->lieu = $request->lieu;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalName();
            $path = $request->image->storeAs('images', $imageName, 'public');
            $cliniques->image = '/'.$path;
        } else {
            $cliniques->image = null;
        }
        $cliniques->save();

        return redirect()->back()->with('success', 'Enregistrement réussi');
    }
}
