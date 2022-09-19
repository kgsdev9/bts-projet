
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Examin - Education and LMS Template">

    <!-- ========== Page Title ========== -->
    <title>Bienvenue Sur Institut Roosvelet</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="ressources/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('ressources/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('ressources/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('ressources/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('ressources/css/elegant-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('ressources/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('ressources/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('ressources/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('ressources/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('ressources/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{asset('ressources/style.css')}}" rel="stylesheet">
    <link href="{{asset('ressources/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area address-one-lines bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map"></i>
                               Abidjan Cote d'ivoire
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                Institutroosvelt@gmail.com
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                +225 40856677
                            </li>
                        </ul>
                    </div>
                </div>
                        @guest
                        <div class="user-login text-right col-md-4">
                    <a class="popup-with-form" href="#register-form">
                        <i class="fas fa-edit"></i> Inscription
                    </a>
                    <a  class="popup-with-form" href="#login-form">
                        <i class="fas fa-user"></i>Connexion
                    </a>
                </div>
                            @else
                            <div class="user-login text-right col-md-4">
                    <a class="" href="{{route('home_dashboard')}}">
                        <i class="fas fa-user"></i>Tableau de bord
                    </a>
                    <a  class="" href="">
                        <i class="fas fa-logt"></i>Deconnexion
                    </a>
                </div>

                        @endguest

            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Rechercher...">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="ressources/img/logo.png" class="logo" alt="Logo" width="140px" class="img-fluid">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li >
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Accueil</a>

                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos Filieres</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Gallery</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="gallery-2-colum.html">Gallery Two Colum</a></li>
                                                    <li><a href="gallery-3-colum.html">Gallery Three Colum</a></li>
                                                    <li><a href="gallery-4-colum.html">Gallery Four Colum</a></li>
                                                    <li><a href="gallery-6-colum.html">Gallery Six Colum</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Advisor</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="advisor-carousel.html">Advisor Carousel</a></li>
                                                    <li><a href="advisor-2-colum.html">Advisor Two Colum</a></li>
                                                    <li><a href="advisor-3-colum.html">Advisor Three Colum</a></li>
                                                    <li><a href="advisor-carousel-2.html">Advisor Carousel Two</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">User Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="profile.html">Profile</a></li>
                                                    <li><a href="edit-profile.html">Edit Profile</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Other Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="404.html">Error Page</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Formations</a>
                            <ul class="dropdown-menu">
                                <li><a href="courses.html">Courses Carousel One</a></li>
                                <li><a href="courses-2.html">Courses Grid One</a></li>
                                <li><a href="courses-3.html">Courses Grid Two</a></li>
                                <li><a href="courses-4.html">Courses Carousel Two</a></li>
                                <li><a href="course-details.html">Course Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Actualites</a>
                            <ul class="dropdown-menu">
                                <li><a href="teachers.html">Advisor</a></li>
                                <li><a href="teachers-details.html">Advisor Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Metiers</a>
                            <ul class="dropdown-menu">
                                <li><a href="event.html">Event Mixed Colum</a></li>
                                <li><a href="event-2.html">Event Grid Colum</a></li>
                                <li><a href="event-3.html">Event Carousel</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="contact.html">contactez-Nous</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title">Institut Roosvelt</h4>
                    <div class="profile-thumb">
                        <img src="ressources/img/800x800.png" alt="Profile">
                    </div>
                    <ul>
                        <li><a href="#">Connexion</a></li>
                        <li><a href="#">Inscription</a></li>
                        <li><a href="#">Contactez-Nous</a></li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>

                <div class="widget social">
                    <h4 class="title">Connexion Via </h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Login Form
    ============================================= -->
    <form action="{{route('login')}}" id="login-form" class="mfp-hide white-popup-block" method="POST">
        @csrf
        <div class="col-md-4 login-social">
            <h4>Se Connecer Via </h4>
            <ul>
                <li class="facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
                <br>
                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                        @error('password')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

            </ul>
        </div>
        <div class="col-md-8 login-custom">
            <h4>Espace De Connexion!</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Votre Adresse E-mail*" type="email" name="email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Mot de passe*" type="text" name="password">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <label for="login-remember"><input type="checkbox" id="login-remember">Se Souvenir de Moi   </label>
                    <a title="Lost Password" href="#" class="lost-pass-link">Mot De Passe Oublié?</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                      Se Connecter
                    </button>
                </div>
            </div>
            <p class="link-bottom">Nous Sommes Ravi  <a href="">De Vous Revoir ! </a></p>
        </div>
    </form>
    <!-- End Login Form -->



    <!-- Start Register Form
    ============================================= -->
    <form action="{{route('register')}}" id="register-form" class="mfp-hide white-popup-block" method="POST">
        @csrf
        <div class="col-md-4 login-social">
            <h4>S'inscrire Via</h4>
            <ul>
                <li class="facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="twitter">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="linkedin">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 login-custom">
            <h4>Inscrivez-Vous Sur Institut Roosvelet</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Nom D'utilisateur*" type="text" name="name">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Votre E-mail*" type="email" name="email" >
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Entrer Votre Mot De Passe*" type="password" name="password">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" placeholder="Confirmer Votre Mot De Passe*" type="text" name="password_confirmation">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <button type="submit">
                       S'inscrire
                    </button>
                </div>
            </div>
            <p class="link-bottom">Vous avez deja un compte? <a href="{{route('login')}}">Connectez-Vous</a></p>
        </div>
    </form>
    <!-- End Register Form -->
            @yield('content')
    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child she new.
                            </p>
                            <p class="text-italic">
                                Please write your email and get our amazing updates, news and support
                            </p>
                            <div class="subscribe">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Courses</a>
                                </li>
                                <li>
                                    <a href="#">Event</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Faqs</a>
                                </li>
                                <li>
                                    <a href="#">Teachers</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Support</h4>
                            <ul>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                                <li>
                                    <a href="#">Forums</a>
                                </li>
                                <li>
                                    <a href="#">Language Packs</a>
                                </li>
                                <li>
                                    <a href="#">Release Status</a>
                                </li>
                                <li>
                                    <a href="#">LearnPress</a>
                                </li>
                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item address">
                            <h4>Address</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <p>Email <span><a href="mailto:support@validtheme.com">support@validtheme.com</a></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i>
                                    <p>Office <span>123 6th St. Melbourne, FL 32904</span></p>
                                </li>
                            </ul>
                            <div class="opening-info">
                                <h5>Opening Hours</h5>
                                <ul>
                                    <li> <span> Mon - Tues :  </span>
                                      <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li> <span> Wednes - Thurs :</span>
                                      <div class="pull-right"> 8.00 am - 6.00 pm </div>
                                    </li>
                                    <li> <span> Sun : </span>
                                      <div class="pull-right closed"> Closed </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('ressources/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('ressources/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ressources/js/equal-height.min.js')}}"></script>
    <script src="{{asset('ressources/js/jquery.appear.js')}}"></script>
    <script src="{{asset('ressources/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('ressources/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('ressources/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('ressources/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('ressources/js/wow.min.js')}}"></script>
    <script src="{{asset('ressources/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('ressources/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('ressources/js/count-to.js')}}"></script>
    <script src="{{asset('ressources/js/loopcounter.js')}}"></script>
    <script src="{{asset('ressources/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('ressources/js/bootsnav.js')}}"></script>
    <script src="{{asset('ressources/js/main.js')}}"></script>

</body>
</html>
