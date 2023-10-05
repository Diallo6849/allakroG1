<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaladiesRequest;
use App\Models\Maladie;
use Illuminate\Http\Request;

class MaladiesController extends Controller
{
    public function index(){
        return view('maladie.create');
     }

     public function store(MaladiesRequest $request){

         $maladies = new Maladie();
         $maladies->nom = $request->nom;
         $maladies->description = $request->description;
         $maladies->date_contagion = $request->date_contagion;
         $maladies->type = $request->type;
         $maladies->mode_transmission = $request->mode_transmission;
         $maladies->traitement = $request->traitement;


         $maladies->save();

         return redirect()->back()->with('success', 'Enregistrement réussi');

    }
}
