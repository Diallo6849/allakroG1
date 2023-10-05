<?php

namespace App\Http\Controllers;

use App\Http\Requests\NaissanceRequest;
use App\Models\Dece;
use App\Models\Naissance;
use Illuminate\Http\Request;

class NaissanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $naissances=Naissance::all();
        // dd('naissance');
        return view('naissance',compact('naissances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $naissances = Naissance::all();
        dd('naissances');
        return view('naissance',compact('naissances'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NaissanceRequest $request)
    {
        // Validation des données


        $naissances = new Naissance();
        $naissances->nom = $request->nom;

        $naissances->pere = $request->pere;
        $naissances->mere = $request->mere;
        $naissances->sexe = $request->sexe;
        $naissances->dateNaissance= $request->dateNaissance;

        $naissances->lieu= $request->lieu;
        $naissances->hopital = $request->hopital;
        $naissances->maison = $request->maison;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalName();
            $path = $request->image->storeAs('images', $imageName, 'public');
            $naissances->image = '/'.$path;
        } else {
            $naissances->image = null;
        }
        $naissances->save();



        // Redirection avec un message de succès
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
