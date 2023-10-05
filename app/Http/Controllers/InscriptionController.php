<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        return view('inscription');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InscriptionRequest $request)
    {
        // Validation des données
        $inscriptions = new Inscription();
        $inscriptions->nom = $request->nom;

        $inscriptions->pere = $request->pere;
        $inscriptions->mere = $request->mere;
        $inscriptions->sexe = $request->sexe;
        $inscriptions->profession= $request->profession;

        $inscriptions->profession_pere= $request->profession_pere;
        $inscriptions->profession_mere= $request->profession_mere;
        $inscriptions->dateNaissance = $request->dateNaissance;
        $inscriptions->dateAmenagement = $request->dateAmenagement;
        $inscriptions->nationalite = $request->nationalite;
        $inscriptions->niveau_etude = $request->niveau_etude;
        $inscriptions->adresse = $request->adresse;
        $inscriptions->telephone = $request->telephone;
        $inscriptions->email = $request->email;
        $inscriptions->situation_m = $request->situation_m;
        $inscriptions->nbre_enfant = $request->nbre_enfant;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalName();
            $path = $request->image->storeAs('images', $imageName, 'public');
            $inscriptions->image = '/'.$path;
        } else {
            $inscriptions->image = null;
        }
        $inscriptions->save();

        return redirect()->back()->with('success', 'Enregistrement réussi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
