<?php

namespace App\Http\Controllers;

use App\Http\Requests\DecesRequest;
use App\Models\Dece;
use Illuminate\Http\Request;

class DecesController extends Controller
{
    public function index(){
        $deces = Dece::all();
        // dd('deces');
        return view('deces',[
            'deces'=>$deces,
        ]);
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
    public function store(DecesRequest $request)
    {
        // Validation des données
        $dece = new Dece();
        $dece->nom = $request->nom;

        $dece->pere = $request->pere;
        $dece->mere = $request->mere;
        $dece->sexe = $request->sexe;
        $dece->dateNaissance= $request->dateNaissance;

        $dece->lieu= $request->lieu;
        $dece->maison = $request->maison;


        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalName();
            $path = $request->image->storeAs('images', $imageName, 'public');
            $dece->image = '/'.$path;
        } else {
            $dece->image = null;
        }
        $dece->date_deces = $request->date_deces;
        $dece->profession = $request->profession;
        $dece->cause = $request->cause;
        $dece->save();

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
