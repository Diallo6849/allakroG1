@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')
    <div class="card p-3" style="background-color: #f5f5f5">
        <h1 class="ml-3 mb-4">Formulaire d'enregistrement de Décès  </h1>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{route('deces.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nom">Nom du defunt</label>
                        <input name="nom" type="text" value="{{old('nom')}}" class="form-control" id="nom" placeholder="Entrez le nom du defunt">
                    </div>
                    @error('nom')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="pere">Nom et Prénom du Père du Defunt</label>
                        <input name="pere" type="text" value="{{old('pere')}}" class="form-control" id="pere" placeholder="Entrez le nom du père du defunt">
                    </div>
                    @error('pere')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="mere">Nom et Prénom de la Mère du Defunt</label>
                        <input name="mere" type="text" value="{{old('mere')}}" class="form-control" id="mere" placeholder="Entrez le nom de la mère du defunt">
                    </div>
                    @error('mere')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="sexe">Sexe</label>
                        <select name="sexe" class="form-control" value="{{old('sexe')}}" id="sexe">
                            <option disabled selected>choisissez le sexe du defunt</option>
                            <option>Masculin</option>
                            <option>Féminin</option>
                        </select>
                    </div>
                    @error('sexe')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="lieu">Lieu du Deces (Hopital/Quartier)</label>
                        <input name="lieu" type="text" value="{{old('lieu')}}" class="form-control" id="lieu" placeholder="Entrez le lieu du Deces">
                    </div>
                    @error('lieu')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
               <div class="col">
                <div class="form-group">
                    <label for="date_deces">Date de naissance</label>
                    <input name="date_deces" type="date" value="{{old('date_deces')}}" class="form-control" id="date_deces">
                </div>

                @error('date_deces')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
               </div>
            </div>
           <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="maison">Lieu d'Habitation des parents du defunt Deces</label>
                    <input name="maison" type="text" value="{{old('maison')}}" class="form-control" id="maison" placeholder="Entrez le lieu d'Habitation des parents du defunt Deces">
                </div>
                @error('maison')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="cause">Cause du Deces</label>
                    <input name="cause" type="text" value="{{old('cause')}}" class="form-control" id="cause" placeholder="Entrez la cause du Deces">
                </div>
                @error('cause')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
            </div>
           </div>
           <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="profession">Profession du dufunt</label>
                    <input name="profession" value="{{old('profession')}}" type="text" class="form-control" id="profession" placeholder="Entrez la profession du dufunt">
                </div>
                @error('profession')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="dateNaissance">Date de naissance</label>
                    <input name="dateNaissance" value="{{old('dateNaissance')}}" type="date" class="form-control" id="dateNaissance">
                </div>
                @error('dateNaissance')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
            </div>
           </div>
           <div class="row">
            <div class="form-group">
                <label for="image">Telecharger le justificatif du deces</label>
                <input name="image" type="file" value="{{old('image')}}" class="form-control" id="image">
            </div>
            @error('image')
                <div class="alert alert-danger offset" role="alert">
                    {{$message}}
                </div>
                @enderror
           </div>


            <button type="submit" class="btn btn-primary float-end">Envoyer</button>
        </div>
    </form>
    </div>
    <br>
    <br>
@endsection

