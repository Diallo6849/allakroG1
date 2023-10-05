@extends('layouts.app')

@section('content')

<div class="container" >
    <form action="{{route('contact-us.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="card p-3" style="background-color: #f5f5f5">
            <h2 class="text-center">Contactez-Nous via ce formulaire</h2>
            @if (session('status'))
            <div class="alert alert-success text-center">
                {{ session('status') }}
            </div>
            @endif

            <div class="form-group">
                <div class=" mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input name="nom" type="text" value="{{old('nom')}}" class="form-control" id="nom" placeholder="nom">
                  </div>
            </div>
            <div class="form-group">
                <div class=" mb-3">
                    <label for="email" class="form-label">Addresse email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" placeholder="nom@example.com">
                  </div>
            </div>
              <div class="form-group mb-3">
                <div class="mb-3">
                    <label for="descruption" class="form-label">Description</label>
                    <textarea class="form-control" value="{{old('descruption')}}" name="descruption" id="descruption" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Contactez-nous</button>

        </div>
    </form>
</div>

@endsection
