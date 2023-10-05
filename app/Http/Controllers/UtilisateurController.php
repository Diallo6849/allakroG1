<?php

namespace App\Http\Controllers;

use App\Http\Requests\UtilisateurRequest;
use App\Models\Clinique;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function index(){
        // $cliniques = Clinique::all();
        return view('utilisateur.create');
    }
    public function store(UtilisateurRequest $request){

        $utilisateurs = new Utilisateur();
        $utilisateurs->nom = $request->nom;
        $utilisateurs->sexe = $request->sexe;
        $utilisateurs->profession= $request->profession;
        $utilisateurs->dateNaissance = $request->dateNaissance;
        $utilisateurs->dateAmenagement = $request->dateAmenagement;
        $utilisateurs->nationalite = $request->nationalite;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalName();
            $path = $request->image->storeAs('images', $imageName, 'public');
            $utilisateurs->image = '/'.$path;
        } else {
            $utilisateurs->image = null;
        }
        $utilisateurs->save();

        return redirect()->back()->with('success', 'Enregistrement réussi');
    }
}
