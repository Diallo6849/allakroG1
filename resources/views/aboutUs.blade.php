@extends('layouts.app')

@section('content')
<div class="container">
    <div class="about-section container m-3">
        <h1 class="mb-4">A propos de nous</h1>
        <p>Les developpeurs de ce site web sont des etudiants de l'universite virtuelle de cote d'ivoire</p>
        <p>Ce site web a ete developper dans le cadre du projet Inclusion Communautaire du Village Allakro </p>
    </div>

    <h2 class="text-center my-4" style="color: orange" >Notre Equipe</h2>
    <div class="row mb-3">
        <div class="col">
        <div class="card">
            <img src="{{asset('images/client.jpg')}}" alt="Jane" style="width:100%">
            <div class="container">
            <h2>Mamadou Lamarana Diallo</h2>
            <p class="title">Developpeur Full Stack Web Mobile</p>
            <p>ReactJs, Python, JavaScript, Django, Laravel</p>
            <p>lamarana.mamadou@uvci.edu.ci</p>
            <p><a class="button" href="tel:0705805424">Contact</button></a>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card">
            <img src="{{asset('images/client.jpg')}}" alt="Mike" style="width:100%">
            <div class="container">
            <h2>TIEGBE Yao Ahoutou Privat</h2>
            <p class="title">Administrateur de Base de donnees</p>
            <p>Oracle, MySqL, Sql server, JavaScript, Python</p>
            <p>privat@gmail.com</p>
            <p><a href="tel:0151634430" class="button">Contact</a></p>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card">
            <img src="{{asset('images/client.jpg')}}" alt="John" style="width:100%">
            <div class="container">
            <h2>N'ZI Kouakou Fardon</h2>
            <p class="title">Developpeur Full Stack Web Mobile</p>
            <p>ReactJs, Python, JavaScript, Django, Laravel</p>
            <p>faibo@gmail.com.com</p>
            <p><a href="tel:0758890867" class="button">Contact</a></p>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card">
            <img src="{{asset('images/client.jpg')}}" alt="John" style="width:100%">
            <div class="container">
            <h2>BONI Kirioua Benzamin</h2>
            <p class="title">Administrateur de base de donnees</p>
            <p>Oracle, MySqL, Sql server, JavaScript, Python</p>
            <p>boni@gmail.com</p>
            <p><a href="tel:0758117236" class="button">Contact</a></p>
            </div>
        </div>
        </div>
    </div>

</div>
@endsection
