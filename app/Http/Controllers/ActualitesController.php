<?php

namespace App\Http\Controllers;

use App\Models\Actualites;
use App\Models\Amenagement;
use App\Models\Amenagements;
use App\Models\Dece;
use App\Models\Demenagement;
use App\Models\Naissance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActualitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $amenagements = Amenagements::paginate(3, ['*'],'amenagements');
        $demenagements = Demenagement::paginate(3, ['*'],'demenagements');
        $naissances = Naissance::paginate(3, ['*'],'naissances');
        $deces = Dece::paginate(3, ['*'],'deces');
        return view('actualite',
        [
            'amenagements' => $amenagements,
            'demenagements' => $demenagements,
            'naissances' => $naissances,
            'deces' => $deces,]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actualite.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'statut' => 'nullable|string|max:255',
            'date_publication' => 'required|date',
            'categorie' => 'required|string|max:255',
            'users_id' => 'exists:users,id',
        ]);
        // Créer une nouvelle entrée dans la base de données
        $actualite = new Actualites;
        $actualite->titre = $request->titre;
        $actualite->contenu = $request->contenu;
        $actualite->image = $request->image;
        $actualite->statut = $request->statut;
        $actualite->date_publication = $request->date_publication;
        $actualite->categorie = $request->categorie;
        $actualite->users_id = Auth::user()->id;  // Ajoutez cette ligne

        // Télécharger l'image si elle est fournie
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalName();
            $path = $request->image->storeAs('images', $imageName, 'public');
            $actualite->image = '/'.$path;
        } else {
            $actualite->image = null;
        }
        $actualite->save();
        // Rediriger l'utilisateur et afficher un message
        return redirect()->route('actualites.create')
            ->with('success', 'Actualité créée avec succès.');
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
