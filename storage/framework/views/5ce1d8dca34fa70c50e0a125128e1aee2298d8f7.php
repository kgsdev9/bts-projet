
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
    <link href="<?php echo e(asset('ressources/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ressources/css/font-awesome.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ressources/css/flaticon-set.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ressources/css/elegant-icons.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ressources/css/magnific-popup.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ressources/css/owl.carousel.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ressources/css/owl.theme.default.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ressources/css/animate.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ressources/css/bootsnav.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('ressources/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('ressources/css/responsive.css')); ?>" rel="stylesheet" />
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
                                +225  07 08 19 23 82
                            </li>
                        </ul>
                    </div>
                </div>
                        <?php if(auth()->guard()->guest()): ?>
                        <div class="user-login text-right col-md-4">
                    <a class="popup-with-form" href="#register-form">
                        <i class="fas fa-edit"></i> Inscription
                    </a>
                    <a  class="popup-with-form" href="#login-form">
                        <i class="fas fa-user"></i>Connexion
                    </a>
                </div>
                            <?php else: ?>
                            <div class="user-login text-right col-md-4">
                    <?php if(Auth::user()->role=="administrateur"): ?>
                    <a  href="<?php echo e(url('/admin/index')); ?>">
                        <?php elseif(Auth::user()->role=="utilisateur"): ?>
                        <a  href="<?php echo e(route('home_dashboard')); ?>">
                        <?php endif; ?>
                        <i class="fas fa-user"></i>Tableau de bord
                    </a>
                    <a  href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-logt"></i>Deconnexion
                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>

                </div>

                        <?php endif; ?>

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
                    <a class="navbar-brand" href="/">
                        <img src="ressources/img/logo.png" class="logo" alt="Logo" width="140px" class="img-fluid">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li >
                            <a href="<?php echo e(url('/')); ?>" class="dropdown-toggle active" data-toggle="dropdown" >Accueil</a>

                        </li>

                        <li class="dropdown">
                            <a href="#" >Nos Filieres</a>

                        </li>


                        <li class="dropdown">
                            <a href="<?php echo e(route('news')); ?>" >Actualites</a>

                        </li>


                        <li>
                            <a href="#">contactez-Nous</a>
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
                        <img src="<?php echo e(asset('ressources/img/logo.png')); ?>" alt="Profile">
                    </div>
                    <ul>
                                    <?php if(auth()->guard()->guest()): ?>
                                    <li><a href="<?php echo e(route('login')); ?>">Connexion</a></li>
                                    <li><a href="<?php echo e(route('register')); ?>">Inscription</a></li>
                                        <?php else: ?>
                                        <?php if(Auth::user()->role=="administrateur"): ?>
                                        <li><a href="<?php echo e(url('/admin/index')); ?>">Tableau de bord</a></li>
                                        <li><a href="/">Contactez-Nous</a></li>
                                            <?php elseif(Auth::user()->role=="utilisateur"): ?>
                                            <li><a href="<?php echo e(route('home_dashboard')); ?>">Tableau de bord</a></li>
                                            <li><a href="/">Contactez-Nous</a></li>
                                            <?php endif; ?>
                                    <?php endif; ?>



                    </ul>
                </div>

                <div class="widget social">
                    <h4 class="title">RESEAUX SOCIAUX </h4>
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
    <form action="<?php echo e(route('login')); ?>" id="login-form" class="mfp-hide white-popup-block" method="POST">
        <?php echo csrf_field(); ?>
        <div class="col-md-4 login-social">
            <h4>Se Connecer Via </h4>
            <ul>
                <?php if($errors->any()): ?>
                <div   div class="alert alert-danger">
                 <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
                    <?php endif; ?>


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
                        <input class="form-control" placeholder="Mot de passe*" type="password" name="password">
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
    <form action="<?php echo e(route('register')); ?>" id="register-form" class="mfp-hide white-popup-block" method="POST">
        <?php echo csrf_field(); ?>
        <div class="col-md-4 login-social">
            <h4>S'inscrire Via</h4>
            <ul>

               <?php if($errors->any()): ?>
            <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
            </div>
    <?php endif; ?>


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
                        <input class="form-control" placeholder="Confirmer Votre Mot De Passe*" type="password" name="password_confirmation">
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
            <p class="link-bottom">Vous avez deja un compte? <a href="<?php echo e(route('login')); ?>">Connectez-Vous</a></p>
        </div>
    </form>
    <!-- End Register Form -->
            <?php echo $__env->yieldContent('content'); ?>
    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img src="<?php echo e(asset('ressources/img/logo.png')); ?>" alt="Logo">
                            <p>
                                L’Institut Supérieur Polytechnique Roosevelt (ISPR) L’Institut Supérieur ISPR est un Etablissement d’Enseignement Supérieur animé par des Enseignants des Universités et Grandes Ecoles en collaboration avec des professionnels. ISPR est situé à Abidjan dans la commune d’abobo akekoi non loin de l’égliseCatholique Saint-Marc..

                            </p>
                            <p class="text-italic">

                            </p>
                            <div class="subscribe">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" placeholder="Entrer votre email" class="form-control" name="email">
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
                            <h4>Liens Utiles</h4>
                            <ul>
                                <li>
                                    <a href="#">Cours</a>
                                </li>
                                <li>
                                    <a href="#">Evenements</a>
                                </li>
                                <li>
                                    <a href="#">Nos Eleves</a>
                                </li>
                                <li>
                                    <a href="#">Nos Enseignants</a>
                                </li>
                                <li>
                                    <a href="#">Nos Formations</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Filieres</h4>
                            <ul>
                                <li>
                                    <a href="#">Filiere Industrielle</a>
                                </li>
                                <li>
                                    <a href="#">FIliere Tertiaire</a>
                                </li>
                                <li>
                                    <a href="#">Postuler au bts</a>
                                </li>
                                <li>
                                    <a href="#">Conditions D'admissions</a>
                                </li>
                                <li>
                                    <a href="#">Cours en ligne</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item address">
                            <h4>Adresse</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <p>Email <span><a href="mailto:support@validtheme.com">institutroosvelet.com</a></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i>
                                    <p>Emplacement <span> ABOBO SAINT MARC PRES DE L'EGLISE CATHOLIQUE</span></p>
                                </li>
                            </ul>
                            <div class="opening-info">
                                <h5>HORAIRE D'OUVERTURE</h5>
                                <ul>
                                    <li> <span> Lundi  -Vendredi:  </span>
                                      <div class="pull-right">8H  - 18 H </div>
                                    </li>
                                    <li> <span> Samedi  - Dimanche :</span>
                                      <div class="pull-right"> fermé </div>
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
                            <p>&copy; Tous Droits reservés à Insittut roosvelet</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">INSTITUT ROOSVELET</a>
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
    <script src="<?php echo e(asset('ressources/js/jquery-1.12.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/equal-height.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/jquery.appear.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/modernizr.custom.13711.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/count-to.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/loopcounter.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/bootsnav.js')); ?>"></script>
    <script src="<?php echo e(asset('ressources/js/main.js')); ?>"></script>




</body>
</html>
<?php /**PATH C:\Users\bts\resources\views/layout/apps.blade.php ENDPATH**/ ?>