@extends('../layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')

    <div class="card p-3" style="background-color:#f5f5f5 ">
        <h1 class="ml-3 mb-4">Formulaire d'enregistrement des hopitaux</h1>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{route('clinique.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nom">Nom de l'Hopital ou Clinique </label>
                        <input name="nom" type="text" class="form-control" value="{{old('nom')}}" id="nom" placeholder="Entrez votre nom de l'hopital">
                    </div>
                    @error('nom')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lieu">Localisation de l'hopital </label>
                        <input name="lieu" type="text" value="{{old('lieu')}}" class="form-control" id="lieu" placeholder="Entrez localisation de l'hopital">
                    </div>
                    @error('lieu')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="service">Services disponible</label>
                        <input name="service"  type="text" value="{{old('service')}}" class="form-control" id="service" placeholder="Entrez les services disponible">
                    </div>
                    @error('service')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="contact">contacts de l'hopital</label>
                        <input name="contact"  type="number" value="{{old('contact')}}" class="form-control" id="contact" placeholder="Entrez les contacts de l'hopital">
                    </div>
                    @error('contact')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="image">La photo du centre de sante </label>
                        <input name="image" type="file" value="{{old('image')}}" class="form-control" id="image">
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

@endsection


