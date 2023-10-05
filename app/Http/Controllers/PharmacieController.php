<?php

namespace App\Http\Controllers;

use App\Http\Requests\PharmacieRequest;
use App\Models\Pharmacie;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    public function index(){
        return view('pharmacie.create');
     }

     public function store(PharmacieRequest $request){

         $pharmacies = new Pharmacie();
         $pharmacies->nom = $request->nom;
         $pharmacies->adresse = $request->adresse;
         $pharmacies->telephone = $request->telephone;
         $pharmacies->email = $request->email;
         $pharmacies->horaire_ouverture = $request->horaire_ouverture;
         $pharmacies->horaire_fermeture = $request->horaire_fermeture;
         $pharmacies->responsable = $request->responsable;
         $pharmacies->statut = $request->statut;

         if ($request->hasFile('image')) {
             $imageName = time().'.'.$request->image->getClientOriginalName();
             $path = $request->image->storeAs('images', $imageName, 'public');
             $pharmacies->image = '/'.$path;
         } else {
             $pharmacies->image = null;
         }
         $pharmacies->save();

         return redirect()->back()->with('success', 'Enregistrement réussi');

    }
}
