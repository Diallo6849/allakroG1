@extends('layouts.app')

@section('head')
    <!-- Balises spécifiques à la page d'accueil -->
@endsection

@section('content')
    <!-- slider section -->
    <section class="slider_section " style="height: 23rem">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="detail-box">
                                    <h1>
                                        Bienvenue sur <br>
                                         le site d'Allakro

                                    </h1>
                                    <div class="btn-box">
                                        <a href="{{route('contact-us')}}" class="btn1">
                                            Contact Us
                                        </a>
                                        <a href="{{route('about-us')}}" class="btn2">About Us</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="detail-box">
                                    <h1>
                                        Bienvenue sur <br>
                                        Allakro
                                    </h1>
                                    <div class="btn-box">
                                        <a href="{{route('contact-us')}}" class="btn1">
                                            Contact Us
                                        </a>
                                        <a href="{{route('about-us')}}" class="btn2">About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>

            </ol>
        </div>

    </section>
    <!-- end slider section -->
    </div>
    <br>
    <br>

    <!-- about section -->

    <section class="about_section">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Présentation du village Allakro
                            </h2>
                        </div>
                        <p>
                            Fondé en 1974, Allakro est un sous-quartier de Cocody peuplé de plus de 4 000 habitants. Il est délimité par la commune d'Adjamé et le camp de la gendarmerie Agban. Situé non loin de l'Université Virtuelle de Côte d'Ivoire, Allakro a pour voisins immédiats le Tribunal du Commerce d'Abidjan, le Consulat du Sénégal et la Fondation DONWAHI. Allakro regorge une population cosmopolite avec plusieurs nationalités qui y cohabitent. On y trouve des Ivoiriens, des Burkinabés, des Togolais, des Béninois, des Guinéens, des Maliens et des Ghanéens etc. La population exerce la plupart du temps dans le secteur informel. Ainsi, la principale activité est le commerce avec la vente du “garba” (attieké poisson), de boisson, produits vivriers, de fruits et légumes, les kiosques à café, des meubles et mobilier de maison etc. Le village Allakro du nom de son tout premier chef N'DA ALLA, est doté d'un certain nombre d'infrastructures tel que : une école (maternelle et primaire), une mosquée et une église etc.

                        </p>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="img-box">
                        <iframe width="944" height="531" src="https://www.youtube.com/embed/QrSN9yZuy-0" title="présentation du village d’allakro @AllakroMedias-ji7mq  @LATVALLAKRO-mn9ln" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="service_section layout_padding">
        <h1 style="color: orange;">Les actualités</h1>  <!-- Titre de la section en orange -->
        <div class="service_container">

            <div class="news-item">
                <h2>Allakro nouvelle naissance de monsieur billé jean</h2>
              <a href="{{route('actualites')}}"  <p> Monsieur billé et madame kouassi on eu un nouveau petit garçon a l'hopital d'allakro</p></a>
                <!-- Vous pouvez remplacer le lien de l'iframe par un lien vers une actualité réelle -->
            </div>
            <div class="news-item">
                <h2>Amenagement de monsieur zadi</h2>
                <a href="{{route('actualites')}}" <p> Nous avions un nouveaux habitant dans la ville d'allakro </p> </a>
                <!-- Vous pouvez remplacer le lien de l'iframe par un lien vers une actualité réelle -->
            </div>

                <h3>Actualité extérieure </h3>
            <div class="news-item">
                <h2>Économie en Côte d'Ivoire : Croissance Record en 2023</h2>
                <p>La Côte d'Ivoire a enregistré une croissance économique record de 8% au premier trimestre de 2023, selon les dernières données du gouvernement.</p>
                <iframe width="944" height="531" src="https://www.youtube.com/embed/LvGHB_yIBFw" title="Côte d’Ivoire: le boom économique ne profite pas à tous" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="news-item">
                <h2>Élections Locales : Les Résultats Officiels Annoncés</h2>
                <p>Les résultats des élections locales ont été annoncés, avec une victoire écrasante du parti au pouvoir dans la plupart des régions.</p>
                <iframe width="944" height="531" src="https://www.youtube.com/embed/EslFbPoFc9I" title="Côte d&#39;Ivoire : les élections municipales et régionales, un test avant la présidentielle de 2025" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            </div>
        </div>
    </section>

    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container">
                    <h2>
                        Services Santé
                    </h2>
                    <p>
                        la maternité d'llakro au service de la santé de ces populations

                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/mater.jpeg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Maternité
                                    Allakro
                                </h5>
                                <p>
                                    la maternite d'allakro est un centre de santé qui a pour but de sauver des vies
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/pediatrie.jpeg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Pediatre
                                </h5>
                                <p>
                                    la pediatrie est une branche de la medecine qui s'occupe des enfants
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/bebe.jpeg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Cardiologie
                                </h5>
                                <p>
                                    Ici nous avons des cardiologues qui sont a votre service et qui vous aide a avoir une bonne sante
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/gyne.jpeg" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Gynechologie
                                </h5>
                                <p>
                                    la gynecologie est une branche de la medecine qui s'occupe des femmes, nos gynecologues sont a votre service
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->


    <!-- about section -->

    <!-- end about section -->

    <!-- project section -->

    <!-- end project section -->

    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Annonce
                </h2>
            </div>
        </div>
        <div id="customCarousel2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/chaussure2.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    bagnon

                                                </h5>
                                                <h6>
                                                    Client
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            Panier tisser a partir de tige de saule
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/chaussure1.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Kouadio kouakou jean
                                                </h5>
                                                <h6>
                                                    Client
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                           chaussure de marque nike
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/page.jpeg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Fofana
                                                </h5>
                                                <h6>
                                                    client
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            Panier tisser a partir de tige de saule.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel2" data-slide-to="1"></li>
                <li data-target="#customCarousel2" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <!-- end client section -->

    <!-- why us section -->

    <!-- end why us section -->

    <!-- contact section -->
    <section class="contact_section layout_padding-bottom">
        <div class="container-fluid" style="margin-top: 40px">

            <div class="row">
                <div class="col-lg-4 col-md-5 offset-md-1">
                    <div class="form_container">
                        <div>
                            <h3>La localisation du village Allakro</h3>
                        </div>
                    </div>
                    <div>
                        <p>Allakro est un village habité situé en Côte d'Ivoire, ayant le code de région Africa/Middle East.

                            Les coordonnées géographiques sont 5°18'0" N et 2°52'60" W en DMS 'degrés, minutes, secondes' ou 5.3 et -2.88333 en degrés décimaux. La position UTM est WL18 et la référence Joint Operation Graphics est NB30-11.

                            L’heure locale actuelle est 17:29; le lever du soleil est à 08:54 et le coucher du soleil est à 21:01 heure locale Africa/Abidjan UTC/GMT+0. Le fuseau horaire pour Allakro est UTC/GMT+0

                    </div>
                </div>
                <div id="localisation-map"  class="col-lg-7 col-md-6 px-0">
                    <div class="map_container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.372842679593!2d-4.010831226344935!3d5.3599516946188235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb3498d02c93%3A0xf44acd25ea20ab7f!2sAllakro!5e0!3m2!1sfr!2sci!4v1694092870870!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

@endsection

@section('scripts')
    <!-- Scripts spécifiques à la page d'accueil -->

        <!-- Scripts spécifiques à la page d'accueil -->
        <script>
            // Fonction pour vérifier si un élément est dans le viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.bottom >= 0
                );
            }

            // Fonction pour ajouter la classe 'show' aux éléments dans le viewport
            function showElements() {
                const newsItems = document.querySelectorAll('.news-item');
                newsItems.forEach((item) => {
                    if (isInViewport(item)) {
                        item.classList.add('show');
                    }
                });
            }

            // Écouteur d'événement pour le défilement
            window.addEventListener('scroll', showElements);

            // Appel initial pour afficher les éléments déjà dans le viewport
            showElements();


        </script>

@endsection
