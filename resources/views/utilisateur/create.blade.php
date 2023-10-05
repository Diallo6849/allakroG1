@extends('../layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')

    <div class="card p-3" style="background-color:#f5f5f5 ">
        <h1 class="ml-3 mb-4">Formulaire d'enregistrement des utilateurs</h1>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{route('utilisateur.store')}}" method="post" enctype="multipart/form-data">
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
                        <input name="profession"value="{{old('profession')}}" type="text" class="form-control" id="profession" placeholder="Entrez votre profession">
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
                        <label for="dateNaissance">Date de Naissance</label>
                        <input name="dateNaissance" value="{{old('dateNaissance')}}" type="date" class="form-control" id="dateNaissance">
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
                    <input name="dateAmenagement" value="{{old('dateAmenagement')}}" type="date" class="form-control" id="dateAmenagement">
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
                        <input name="nationalite" value="{{old('nationalite')}}" type="text" class="form-control" id="nationalite" placeholder="Entrez votre nationalite">
                    </div>
                    @error('nationalite')
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


