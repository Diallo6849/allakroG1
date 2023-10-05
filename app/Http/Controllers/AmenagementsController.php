<?php

namespace App\Http\Controllers;

use App\Http\Requests\AmenagementRequest;
use App\Models\Amenagement;
use App\Models\Amenagements;
use Illuminate\Http\Request;

class AmenagementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $amenagements = Amenagements::paginate(3);
        return view('amenagement', compact('amenagements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $amenagement = new Amenagements();
        return view('amenagement.create', compact('amenagement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // Méthode pour traiter les données du formulaire
    public function store(AmenagementRequest $request)
    {

        // Validation des données
        $amenagements = new Amenagements();
        $amenagements->nom = $request->nom;

        $amenagements->tuteur = $request->tuteur;
        $amenagements->tutrice = $request->tutrice;
        $amenagements->sexe = $request->sexe;
        $amenagements->dateNaissance= $request->dateNaissance;
        $amenagements->dateAmenagement= $request->dateAmenagement;
        $amenagements->profession= $request->profession;
        $amenagements->provenance= $request->provenance;
        $amenagements->destination = $request->destination;


        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalName();
            $path = $request->image->storeAs('images', $imageName, 'public');
            $amenagements->image = '/'.$path;
        } else {
            $amenagements->image = null;
        }
        $amenagements->save();

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Enregistrement réussi');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $amenagement = Amenagements::find($id);

        return view('amenagement.show', compact('amenagement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $amenagement = Amenagements::find($id);

        return view('amenagement.edit', compact('amenagement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Amenagements $amenagement)
    {

        $amenagement->update($request->all());

        return redirect()->route('amenagements.index')
            ->with('success', 'Amenagement updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
