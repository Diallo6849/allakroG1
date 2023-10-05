@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')

    <div class="card p-3" style="background-color:#f5f5f5 ">
        <h1 class="ml-3 mb-4">Formulaire d'enregistrements des pharmacies </h1>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{route('pharmacie.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nom">Nom de la Pharmacie </label>
                        <input name="nom" type="text" value="{{old('nom')}}" class="form-control" id="nom" placeholder="Entrez votre nom">
                    </div>
                    @error('nom')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="adresse">Adresse de la Pharmacie</label>
                        <input name="adresse" value="{{old('adresse')}}" type="text" class="form-control" id="adresse" placeholder="Entrez l'adresse de la pharmacie">
                    </div>
                    @error('adresse')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="telephone">Numero de telephone du Responsable</label>
                        <input name="telephone" value="{{old('telephone')}}" type="number" class="form-control" id="telephone" placeholder="Entrez le numero de telephone">
                    </div>
                    @error('telephone')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="col">
                        <div class="form-group">
                            <label for="responsable">Nom du responsable de la pharmacie</label>
                            <input name="responsable" value="{{old('responsable')}}" type="text" class="form-control" id="responsable" placeholder="Entrez le nom du responsable de la pharmacie">
                        </div>
                        @error('responsable')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email de la pharmacie</label>
                        <input name="email" value="{{old('email')}}" type="email" class="form-control" id="email" placeholder="Entrez  l'email">
                    </div>
                    @error('email')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="image">Photo de la Pharmacie </label>
                        <input name="image" value="{{old('image')}}" type="file" class="form-control" id="image">
                    </div>
                    @error('image')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="horaire_ouverture">L'heure d'ouverture de la pharmacie</label>
                        <input name="horaire_ouverture"value="{{old('horaire_ouverture')}}"  type="time" class="form-control" id="horaire_ouverture" placeholder="Entrez l'heure d'ouverture">
                    </div>
                    @error('horaire_ouverture')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="horaire_fermeture">L'heure de fermeture de la pharmacie</label>
                        <input name="horaire_fermeture" value="{{old('horaire_fermeture')}}" type="time" class="form-control" id="horaire_fermeture" placeholder="Entrez L'heure de fermeture de la pharmacie">
                    </div>
                    @error('horaire_fermeture')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="statut">Status de la pharmacie</label>
                        <select name="statut" value="{{old('statut')}}" class="form-control" id="statut">
                            <option selected disabled> Selectionner le statut de la pharmacie</option>
                            <option>Ouvert</option>
                            <option>Fermé</option>
                        </select>
                        </div>
                        @error('statut')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary float-end">Envoyer</button>
                    </div>
                </div>
            </div>

        </div>
    </form>
    </div>
    <br>

@endsection


