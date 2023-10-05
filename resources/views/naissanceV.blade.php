<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Allakro</title>
    <link rel="stylesheet" href="{{asset('style_bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('style_bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('style_bootstrap/js/bootstrap.min.js')}}"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> --}}
</head>
<body>
    <div class="container">


    <h1 class="text-center mb-3">Listes de Naissances inscrits</h1>
    @if (session('success'))
    <div class="alert alert-success text-center">
        {{session('success')}}
    </div>
    @endif
    <br>

    <div class="row">
        <h3>choisissez l'hopital</h3>
        @foreach ($cliniques as $clinique)
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">{{$clinique->nom}}</label>
          </div>
        @endforeach
    </div>
    </div>
</body>
</html>
