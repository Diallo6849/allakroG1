@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')
    <div class="card p-3" style="background-color: #f5f5f5">
        <h1 class="ml-3 mb-4">Formulaire de Démenagement
        </h1>
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{route('demenagement.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nom">Nom et Prénom</label>
                            <input name="nom" type="text" value="{{old('nom')}}" class="form-control" id="nom" placeholder="Entrez votre nom et prenom">
                        </div>
                        @error('nom')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tuteur">Nom et Prénom du Père</label>
                            <input name="tuteur" type="text" value="{{old('tuteur')}}" class="form-control" id="tuteur" placeholder="Entrez le nom complet de votre père">
                        </div>
                        @error('tuteur')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="tutrice">Nom et Prénom de la Mère</label>
                            <input name="tutrice" value="{{old('tutrice')}}" type="text" class="form-control" id="tutrice" placeholder="Entrez le nom complet de votre mère">
                        </div>
                        @error('tutrice')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="sexe">Sexe</label>
                            <select name="sexe" value="{{old('sexe')}}" class="form-control" id="sexe">
                                <option disabled selected>choisissez votre genre</option>
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
                            <label for="profession">Profession</label>
                            <input name="profession" value="{{old('profession')}}" type="text" class="form-control" id="profession" placeholder="Entrez votre profession">
                        </div>
                        @error('profession')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="dateNaissance">Date de Naissance</label>
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
                    <div class="col">
                        <div class="form-group">
                            <label for="dateAmenagement">Date Deménagement</label>
                            <input name="dateDemenagement" value="{{old('dateDemenagement')}}" type="date" class="form-control" id="dateAmenagement">
                        </div>
                        @error('dateDemenagement')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="provenance">Residence</label>
                            <input name="provenance" value="{{old('provenance')}}" type="text" class="form-control" id="provenance" placeholder="Entrez votre ancien lieu de residence">
                        </div>
                        @error('provenance')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="destination">Votre Nouvelle Destination</label>
                            <input name="destination" type="text" value="{{old('destination')}}" class="form-control" id="destination" placeholder="Entrez votre nouvelle destination">
                        </div>
                        @error('destination')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="image">Telecharger le fichier justificatif </label>
                            <input name="image" type="file" value="{{old('image')}}" class="form-control" id="image" placeholder="Telecharger le fichier justificatif">
                        </div>
                        @error('image')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-end">Envoyer</button>
            </div>
        </form>
    </div>
    <br>
    <br>
@endsection

