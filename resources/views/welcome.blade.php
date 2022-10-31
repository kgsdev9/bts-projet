@extends('layout.apps')
@section('content')


    <!-- Start Banner
    ============================================= -->
    <div class="banner-area content-top-heading text-normal heading-weight-600 auto-height">
        <div id="bootcarousel" class="carousel slide animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light">
                <div class="item active">
                    <div class="box-table bg-fixed shadow dark" style="background-image: url(ressources/img/banner3.jpg);">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated fadeInUp">Bienvenue Sur Insittut Roosvelet  <span>!</span></h1>
                                            <p data-animation="animated fadeInUp">
                                              Institut Roosvelet est une ecole de formation superieur d'excellente !
                                            </p>
                                            <a data-animation="animated fadeInDown" class="btn circle btn-light effect btn-md" href="">Contactez-Nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-table shadow bg-fixed dark" style="background-image: url(ressources/img/banner2.jpg);">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated fadeInUp">Postuler pour une   <span>Candidature</span> BTS à 12000FCFA</h1>
                                            <p data-animation="animated fadeInUp">
                                             Profitez d'une candidature Libre BTS à un prix Abordable
                                            </p>
                                            <a data-animation="animated fadeInDown" class="btn circle btn-light effect btn-md" href="{{route('ajout_candidature')}}">Plus De Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Prescedent</span>
            </a>
            <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Suivant</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our Features Latest Post
    ============================================= -->
    <div class="our-featues-area inc-trending-courses about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 our-feature-items">
                    <div class="row">

                        <div class="col-md-12 info less-bar">
                            <h5></h5>
                            <h1>Les bonnes raisons d’intégrer INSTITUT ROOSVELET !</h1>
                            <p>Richesse et diversité de la vie associative À ISPR, la formation va au-delà du cadre strictement académique. Les initiatives associatives dans des domaines variés (technique, humanitaire, sport, culture…) sont encouragées. Elles sont aussi pour les élèves une occasion supplémentaire de révéler leurs talents et de concevoir un projet tout en favorisant leur épanouissement personnel.</p>
                            <p>
                                Bons de réduction d’au moins 50%

                                3 mois minimum en entreprise

                                30 associations et clubs

                                100 % des diplômés en poste en moins de 6 mois

                                100 % des élèves effectuent des stages en entreprise

                                Une centaine d’entreprises partenaires

                                500 diplômés par an

                                6000 diplômés en activité

                                 Internats pour l’hébergement des étudiants

                                Des cars de transport

                                Des établissements à proximité des étudiants
                            </p>

                        </div>

                        <!-- Start Fatures -->
                        <div class="our-features">
                            <div class="col-md-6 col-sm-6">
                                <div class="item mariner">
                                    <div class="icon">
                                        <i class="flaticon-faculty-shield"></i>
                                    </div>
                                    <div class="info">
                                        <h4>NOS FILIERES</h4>
                                        <a href="#">Consulter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="item java">
                                    <div class="icon">
                                        <i class="flaticon-book-2"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Cours en ligne</h4>
                                        <a href="#">Consulter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="item malachite">
                                    <div class="icon">
                                        <i class="flaticon-education"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Scolarite</h4>
                                        <a href="#">Consulter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="item brilliantrose">
                                    <div class="icon">
                                        <i class="flaticon-university-campus"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Formations</h4>
                                        <a href="#">Consulter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Our Features -->



            </div>
        </div>
    </div>
    <!-- End Our Features & Latest Post -->

    <!-- Start Popular Courses
    ============================================= -->
    <div class="popular-courses bg-gray circle carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>ACTUALITES </h2>
                        <p>
                            Suivez les informations d'institut roosvelet et de l'education Superieur .
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-courses-items bottom-price popular-courses-carousel owl-carousel owl-theme">


                            @foreach ($article as $c  )
                                <!-- Single Item -->

                        <div class="item">
                            <div class="thumb">
                                <a href="{{route('content.index', $c->id)}}">
                                    <img src="{{asset('uploads/articles/'. $c->image)}}" alt="Thumb" style="height:300px; width:849px;">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="{{route('content.index', $c->id)}}">
                                        <i class="fas fa-chart-bar"></i> Lire la suite
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="{{asset('ressources/img/logo.png')}}" alt="Thumb" ></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">INSTITUT ROOSVELET</a>

                                    </div>
                                </div>
                                <h4><a href="#">{{ Str::limit($c->name_article, 55)}}</a></h4>
                                <div class="cats">
                                    <a href="#"> {{$c->category->name}}Education</a>

                                </div>
                                <p>
                                        {{ Str::limit($c->description, 100)}}
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i>instittut roosvelet
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                            @endforeach






                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->









    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Nos Etudiants Temoignent </h2>
                        <p>
                            Nos Etudiants ayant participer à nos cours et formatios ont donné leurs avis sur nos differentes formartions

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-review-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="{{asset('ressources/img/logo.png')}}" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Pour moi le BTS CI m'a apporté une pluridisciplinarité des cours qui m'a permis d'être compétente sur plusieurs domaines


                                </p>
                                <h4>Kouakou Ange Patrick</h4>
                                <span>Developpeur D'Application</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="{{asset('ressources/img/logo.png')}}" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    J'ai obtenu le BTS en juin et trouvé un emploi en septembre après avoir fait un job étudiant pendant les vacances.
                                </p>
                                <h4>Bleo Patrick </h4>
                                <span>Ressources Humaines et Communication</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="{{asset('ressources/img/logo.png')}}" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Deux très belles années, j'en garde un excellent souvenir! Les cours enseignés à La Providence sont de qualité et représentent un très bon bagage pour la poursuite des études.


                                </p>
                                <h4>Kakou Roxane</h4>
                                <span>RHCOM</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="{{asset('ressources/img/logo.png')}}" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Le BTS a été pour moi une chance incroyable : j'ai pu ainsi trouver ma voie et un métier qui me plaît.

                                </p>
                                <h4>David Guei</h4>
                                <span>RIT</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->








@endsection
