@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')
    <br>
    <br>
    <h1>Presentez vos compétence</h1>
    <p>Vous pouvez présenter vos compétences en remplissant le formulaire ci-dessous.</p>
    <br>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{route('competence.store')}}" method="post" class="jumbotron" enctype="multipart/form-data" id="upload-image" action="{{ url('save') }}">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="nom">Nom et prenom</label>
                    <input name="nom" value="{{old('nom')}}" type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
                </div>
                @error('nom')
                <div class="alert alert-danger offset" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="service">Services et Competences</label>
                    <input name="service" value="{{old('service')}}" type="text" class="form-control" id="service" placeholder="Entrez le service et competence">
                </div>
                @error('service')
                <div class="alert alert-danger offset" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
       <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="lieu">le lieu du service</label>
                <input name="lieu" value="{{old('lieu')}}" type="text" class="form-control" id="lieu" placeholder="Entrez le lieu">
            </div>
            @error('lieu')
                <div class="alert alert-danger offset" role="alert">
                    {{$message}}
                </div>
                @enderror
        </div>
        <div class="col">
            <div class="form-group">
                <label for="contact">Votre Contact</label>
                <input name="contact" value="{{old('contact')}}" type="number" class="form-control" id="contact" placeholder="Entrez votre Contact">
            </div>
            @error('contact')
                <div class="alert alert-danger offset" role="alert">
                    {{$message}}
                </div>
                @enderror
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="email">Votre Email</label>
                    <input name="email" value="{{old('email')}}" type="email" class="form-control" id="email" placeholder="Entrez votre email">
                </div>
                @error('email')
                <div class="alert alert-danger offset" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" value="{{old('description')}}" class="form-control" id="description">
                    </textarea>
                </div>
                @error('description')
                <div class="alert alert-danger offset" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="prix">Votre prix</label>
                    <input name="prix" type="number" value="{{old('prix')}}" class="form-control" id="prix" placeholder="Entrez le prix">
                </div>
                @error('prix')
                <div class="alert alert-danger offset" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="destination">Votre image</label>
                    <input name="image" value="{{old('image')}}" type="file" class="form-control" id="image">
                </div>
                @error('image')
                <div class="alert alert-danger offset" role="alert">
                    {{$message}}
                </div>
                @enderror
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary float-end">Envoyer</button>
    </form>
    <br>
    <br>
@endsection

