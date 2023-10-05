@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container health-container">
        <h1 class="text-center text-orange">Santé et Bien-être</h1>

        <!-- Centres de santé -->
        <section class="pharmacies">
            <h2 class="text-orange">Centre sante</h2>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('images/phamacie.jpg')}}" class="card-img" alt="Image de la pharmacie">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Centre de sante allakro</h5>
                            <p class="card-text">
                                <strong>Services disponibles:</strong> Médecin généraliste, Gynécologie obstétrique, Chirurgie générale, Néonatalogie, Pédiatrie, Radiologie, Laboratoire d'analyses médicales, Néphrologie, Rhumatologie, Neurologie, Neurochirurgie, Traumatologie, ORL, Stomatologie, Urologie, Psychiatrie, Dermatologie, Gastro-entérologie, Ophtalmologie, Cardiologie, Hématologie, Diabétologie, Kinésithérapie, Chirurgie-dentiste <br>
                                <strong>Adresse :</strong> 92C2+6W6 ·, Abidjan - II-Plateaux <br>
                                <strong>Téléphone :</strong> 27 22 4 13604 <br>
                                <strong>Horaires :</strong> ouvert du lundi au vendredi de 07:30 à 20:30 <br>
                                <strong>Catégorie :</strong> Sécurité, hygiène et environnement / Pharmacies
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Maladies et Épidémies -->
        <!-- Maladies et Épidémies -->
        <section class="diseases">
            <h2 class="text-orange">Maladies et Épidémies en Allakro </h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Maladie</th>
                    <th>Symptômes</th>
                    <th>Épidémie</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Malaria</td>
                    <td>Fièvre, frissons, maux de tête</td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>VIH/SIDA</td>
                    <td>Fatigue, perte de poids, fièvre</td>
                    <td>Non</td>
                </tr>
                <tr>
                    <td>Tuberculose</td>
                    <td>Toux, fatigue, perte de poids</td>
                    <td>Non</td>
                </tr>
                <tr>
                    <td>Choléra</td>
                    <td>Diarrhée, déshydratation, nausées</td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>Ébola</td>
                    <td>Fièvre, faiblesse, douleurs musculaires</td>
                    <td>Oui</td>
                </tr>
                </tbody>
            </table>
        </section>

        <!-- Supermarchés -->
        <section class="pharmacies">
            <h2 class="text-orange">Super Marché</h2>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('images/super.jpeg')}}" class="card-img" alt="Image de la pharmacie">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Super Marché</h5>
                            <p class="card-text">
                                <strong>Services disponibles:</strong> Achats en magasin · Livraison <br>
                                <strong>Adresse :</strong> 92C2+6W6 ·, Abidjan - II-Plateaux <br>
                                <strong>Téléphone :</strong> 27 22 4 13604 <br>
                                <strong>Horaires :</strong> ouvert du lundi au vendredi de 07:30 à 20:30 <br>
                                <strong>Catégorie :</strong> Sécurité, hygiène et environnement / Pharmacies
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pharmacies -->
        <section class="pharmacies">
            <h2 class="text-orange">Pharmacies</h2>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('images/phamacie.jpg')}}" class="card-img" alt="Image de la pharmacie">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nom de la pharmacie</h5>
                            <p class="card-text">
                                <strong>Services disponibles:</strong> Achats en magasin · Livraison <br>
                                <strong>Adresse :</strong> 92C2+6W6 ·, Abidjan - II-Plateaux <br>
                                <strong>Téléphone :</strong> 27 22 4 13604 <br>
                                <strong>Horaires :</strong> ouvert du lundi au vendredi de 07:30 à 20:30 <br>
                                <strong>Catégorie :</strong> Sécurité, hygiène et environnement / Pharmacies
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br>
    <br>
    <br>
@endsection
