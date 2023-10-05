@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')
    <div class="card p-3" style="background-color: #f5f5f5">
        <h1 class="ml-3 mb-4">Formulaire de naissance</h1>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{route('naissance.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="form-group">
                        <label for="nom">Nom et prénom du bébé</label>
                        <input name="nom" type="text" value="{{old('nom')}}" class="form-control" id="nom" placeholder="Entrez le nom du nouveau né">
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
                        <input name="pere" type="text" value="{{old('pere')}}" class="form-control" id="pere" placeholder="Entrez le nom complet du père">
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
                        <input name="mere" type="text" value="{{old('mere')}}" class="form-control" id="mere" placeholder="Entrez le nom complet de la mère">
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
                            <option disabled selected>choisissez le sexe du bébé</option>
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
                        <label for="hopital">Nom de l'hopital ou quartier de </label>
                        <input name="hopital" type="text" value="{{old('hopital')}}" class="form-control" id="hopital" placeholder="Entrez le nom de l'hopital ou vous etes ne ">
                    </div>
                    @error('hopital')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="lieu">Lieu de naissance</label>
                        <input name="lieu"  type="text" value="{{old('lieu')}}" class="form-control" id="lieu" placeholder="Entrez le lieu de naissance du bébé">
                    </div>
                    @error('lieu')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="maison">Lieu d'habitation </label>
                            <input name="maison" type="text" value="{{old('maison')}}" class="form-control" id="maison" placeholder="Entrez votre lieu d'habitaion">
                        </div>
                        @error('maison')
                        <div class="alert alert-danger offset" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="row">
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
            </div>
            <button type="submit" class="btn btn-primary float-end">Envoyer</button>
        </div>
    </form>
    </div>
    <br>
    <br>
@endsection


