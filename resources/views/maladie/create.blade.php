@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')

    <div class="card p-3" style="background-color:#f5f5f5 ">
        <h1 class="ml-3 mb-4">Formulaire d'enregistrements des maladies </h1>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{route('maladie.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nom">Nom de la maladie </label>
                        <input name="nom" value="{{old('nom')}}" type="text" class="form-control" id="nom" placeholder="Entrez le nom de la maladie">
                    </div>
                    @error('nom')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="description">Description de la maladie</label>
                        <textarea name="description" value="{{old('description')}}" type="text" class="form-control" id="description" placeholder="Entrez la description de la maladie"></textarea>
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
                        <label for="date_contagion">Debut de la maladie</label>
                        <input name="date_contagion" value="{{old('date_contagion')}}" type="date" class="form-control" id="date_contagion" placeholder="Entrez le date de debut de la maladie">
                    </div>
                    @error('date_contagion')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="type">Type de la maladie</label>
                        <input name="type" value="{{old('type')}}" type="text" class="form-control" id="type" placeholder="Entrez le type de la maladie">
                    </div>
                    @error('type')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="mode_transmission">Mode de transmission de la maladie</label>
                        <textarea name="mode_transmission" value="{{old('mode_transmission')}}" type="mode_transmission" class="form-control" id="mode_transmission" placeholder="Entrez le mode transmission de la maladie"></textarea>
                    </div>
                    @error('mode_transmission')
                    <div class="alert alert-danger offset" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="traitement">Traitement de la maladie </label>
                        <textarea name="traitement" value="{{old('traitement')}}" type="text" class="form-control" id="traitement"></textarea>
                    </div>
                    @error('traitement')
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


