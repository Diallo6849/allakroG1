@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-3" style="text-color: #0c5460">Tous les news du Village</h1>

        <div class="card mb-3 p-2">
            <h2 class="text-center m-3">Aménagements</h2>
            <div class="row">
                @foreach($amenagements as $amenagement)
                    <div class="col-md-4 mb-4">
                        <div class="card news-card">

                            <!--   <img src="" class="card-img-top" alt="..."> -->
                            <div class="card-body news-card-body">
                                <h5 class="card-title news-card-title">Nom tutrice : {{ $amenagement->nom }}</h5>
                                <p class="card-text news-card-text">Provenance : {{ $amenagement->provenance }}</p>
                                <p class="card-text news-card-text">Profession : {{ $amenagement->profession }}</p>
                                <p class="card-text news-card-text">Destination : {{ $amenagement->destination }}</p>
                                <p class="card-text news-card-text">Sexe : {{ $amenagement->sexe }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination justify-content-center">
                    {{$amenagements->appends([
                        'demenagements'=>$demenagements->currentPage(),
                        'naissances'=>$naissances->currentPage(),
                        'deces'=>$deces->currentPage(),

                        ]
                        )->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>

       <div class="card mb-3 p-2">
            <h2 class="text-center m-3">Déménagements</h2>
            <div class="row">
                @foreach($demenagements as $demenagement)
                    <div class="col-md-4 mb-4">
                        <div class="card news-card">

                            <!--   <img src="" class="card-img-top" alt="..."> -->
                            <div class="card-body news-card-body">
                                <h5 class="card-title news-card-title">Nom tutrice : {{ $demenagement->nom }}</h5>
                                <p class="card-text news-card-text">Provenance : {{ $demenagement->provenance }}</p>
                                <p class="card-text news-card-text">Profession : {{ $demenagement->profession }}</p>
                                <p class="card-text news-card-text">Destination : {{ $demenagement->destination }}</p>
                                <p class="card-text news-card-text">Sexe : {{ $demenagement->sexe }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination justify-content-center">
                    {{$demenagements->appends([
                        'amenagements'=>$amenagements->currentPage(),
                        'naissances'=>$naissances->currentPage(),
                        'deces'=>$deces->currentPage(),

                        ]
                        )->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>


        <div class="card mb-3 p-2">
            <h2 class="text-center m-3">Naissances</h2>
            <div class="row">
                @foreach($naissances as $naissance)
                    <div class="col-md-4 mb-4">
                        <div class="card news-card">

                            <!--   <img src="" class="card-img-top" alt="..."> -->
                            <div class="card-body news-card-body">
                                <h5 class="card-title news-card-title">Nom du bebe : {{ $naissance->nom }}</h5>
                                <p class="card-text news-card-text">Sexe : {{ $naissance->sexe }}</p>
                                <p class="card-text news-card-text">Date de naissance : {{ $naissance->dateNaissance }}</p>
                                <p class="card-text news-card-text">Destination : {{ $naissance->lieu }}</p>
                                <p class="card-text news-card-text">Hopital : {{ $naissance->hopital }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination justify-content-center">
                    {{$naissances->appends([
                        'amenagements'=>$amenagements->currentPage(),
                        'demenagements'=>$demenagements->currentPage(),
                        'deces'=>$deces->currentPage(),

                        ] )->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>
        <div class="card mb-3 p-2">
            <h2 class="text-center m-3">Décès</h2>
            <div class="row">
                @foreach($deces as $dece)
                    <div class="col-md-4 mb-4">
                        <div class="card news-card">

                            <!--   <img src="" class="card-img-top" alt="..."> -->
                            <div class="card-body news-card-body">
                                <h5 class="card-title news-card-title">Nom du defunt : {{ $dece->nom }}</h5>
                                <p class="card-text news-card-text">Sexe : {{ $dece->sexe }}</p>
                                <p class="card-text news-card-text">Date du deces : {{ $dece->dateDeces }}</p>
                                <p class="card-text news-card-text">hopital : {{ $dece->hopital }}</p>
                                <p class="card-text news-card-text">Cause : {{ $dece->cause }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination justify-content-center">
                    {{$deces->appends([
                        'amenagements'=>$amenagements->currentPage(),
                        'demenagements'=>$demenagements->currentPage(),
                        'naissances'=>$naissances->currentPage(),

                        ] )->links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>

    </div>
@endsection
<br>
<br>
