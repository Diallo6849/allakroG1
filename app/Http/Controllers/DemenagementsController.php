<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemenagementRequest;
use App\Models\Demenagement;
use Illuminate\Http\Request;

class DemenagementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demenagements = Demenagement::paginate(4);
        return view('demenagement', compact('demenagements'));
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
    public function store(DemenagementRequest $request)
    {
        // Validation des données
        $demenagements = new Demenagement();
        $demenagements->nom = $request->nom;

        $demenagements->tuteur = $request->tuteur;
        $demenagements->tutrice = $request->tutrice;
        $demenagements->sexe = $request->sexe;
        $demenagements->dateNaissance= $request->dateNaissance;
        $demenagements->dateDemenagement= $request->dateDemenagement;
        $demenagements->profession= $request->profession;
        $demenagements->provenance= $request->provenance;
        $demenagements->destination = $request->destination;


        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalName();
            $path = $request->image->storeAs('images', $imageName, 'public');
            $demenagements->image = '/'.$path;
        } else {
            $demenagements->image = null;
        }
        $demenagements->save();
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
