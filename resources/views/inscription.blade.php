@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')
    <div class="card p-3" style="background-color:#f5f5f5 ">
        <h1 class="ml-3 mb-4">Formulaire d'inscription de chaque habitant </h1>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{route('inscription.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nom">Nom et prenom </label>
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
                        <label for="pere">Nom et Prénom du père</label>
                        <input name="pere" type="text" value="{{old('pere')}}" class="form-control" id="pere" placeholder="Entrez le nom du père">
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
                        <label for="mere">Nom et Prénom de la mère</label>
                        <input name="mere" type="text" value="{{old('mere')}}" class="form-control" id="mere" placeholder="Entrez le nom de la mère">
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
                        <select name="sexe" value="{{old('sexe')}}" class="form-control" id="sexe">
                            <option selected disabled> Selectionner votre sexe</option>
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
                        <label for="profession">Votre Profession </label>
                        <input name="profession" type="text" value="{{old('profession')}}" class="form-control" id="profession" placeholder="Entrez votre profession">
                    </div>
                    @error('profession')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="image">Votre photo </label>
                        <input name="image" type="file" value="{{old('image')}}" class="form-control" id="image">
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
                        <label for="profession_pere">Profession du père</label>
                        <input name="profession_pere" value="{{old('profession_pere')}}" type="text" class="form-control" id="profession_pere" placeholder="Entrez la profession de votre pere">
                    </div>
                    @error('profession_pere')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="profession_mere">Profession de la mere</label>
                        <input name="profession_mere" type="text" value="{{old('profession_mere')}}" class="form-control" id="profession_mere" placeholder="Entrez la profession de votre mere">
                    </div>
                    @error('profession_mere')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="dateNaissance">Date de Naissance</label>
                        <input name="dateNaissance" type="date" value="{{old('dateNaissance')}}" class="form-control" id="dateNaissance">
                    </div>
                    @error('dateNaissance')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
               <div class="col">
                <div class="form-group">
                    <label for="dateAmenagement">Date aménagement</label>
                    <input name="dateAmenagement" type="date" value="{{old('dateAmenagement')}}" class="form-control" id="dateAmenagement">
                </div>
                @error('dateAmenagement')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
               </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nationalite">Nationnalite</label>
                        <input name="nationalite"  type="text" value="{{old('nationalite')}}" class="form-control" id="nationalite" placeholder="Entrez votre nationalte">
                    </div>
                    @error('nationalite')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="situation_m">Situation matrimoniale</label>
                        <select name="situation_m" value="{{old('situation_m')}}" class="form-control" id="situation_m">
                            <option selected disabled> Selectionner votre situation matrimoniale</option>
                            <option>Celibataire</option>
                            <option>Divroce(e)</option>
                            <option>Marie(e)</option>
                            <option>Voeuf(ve)</option>
                        </select>
                    </div>
                    @error('situation_m')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nbre_enfant">Nombres d'enfants</label>
                        <input name="nbre_enfant" value="{{old('nbre_enfant')}}" type="number" class="form-control" id="nbre_enfant" placeholder="Entrez votre nombre d'enfants">
                    </div>
                    @error('nbre_enfant')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="telephone">Telephone</label>
                        <input name="telephone" value="{{old('telephone')}}" type="number" class="form-control" id="telephone" placeholder="Entrez votre numero de telephone">
                    </div>
                    @error('telephone')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="adresse">Adresse </label>
                        <input name="adresse" type="text" value="{{old('adresse')}}" class="form-control" id="adresse" placeholder="Entrez votre adresse">
                    </div>
                    @error('adresse')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="niveau_etude">Niveau d'etude</label>
                        <select name="niveau_etude" value="{{old('niveau_etude')}}" class="form-control" id="niveau_etude">
                            <option selected disabled> Selectionner votre niveau d'etude</option>
                            <option>M2</option>
                            <option>M1</option>
                            <option>L3</option>
                            <option>L2</option>
                            <option>L1</option>
                            <option>Terminale</option>
                            <option>1ere</option>
                            <option>2nde</option>
                            <option>3eme</option>
                            <option>4eme</option>
                            <option>5eme</option>
                            <option>6eme</option>
                            <option>CM2</option>
                            <option>Autre</option>
                        </select>
                    </div>
                    @error('niveau_etude')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" value="{{old('email')}}" type="email" class="form-control" id="email" placeholder="Entrez votre email">
                    </div>
                    @error('email')
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
@endsection


