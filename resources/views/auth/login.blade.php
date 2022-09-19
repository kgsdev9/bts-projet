@extends('layout.apps')


@section('content')

    <!-- Start Login 
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="{{route('login')}}" id="login-form" class="white-popup-block" method="POST">
                        @csrf
                        <div class="col-md-4 login-social">
                            <h4>NOUS SOMMES HEUREUX DE VOUS REVOIR !</h4>
                          <p>Institut Roosvelet vous offre une multiide de possibilite</p>

                                    @error('email')
                                
                                        <small style="color:red;">{{$message}}</small>
                                    @enderror

                                    @error('password')
                                
                                <small style="color:red;">{{$message}}</small>
                            @enderror

                        </div>
                        <div class="col-md-8 login-custom">
                            <h4>Connexion Sur Institut Roosvelet!</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Votre Adreesse E-mail*" type="email">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Votre Mot De Passe*" type="password" name="password">
                                    </div>
                                </div>
                            </div>
                            


                            <div class="col-md-12">
                                <div class="row">
                                    <label for="login-remember"><input type="checkbox" id="login-remember">Se Souvenir de moi </label>
                                    <a title="Lost Password" href="#" class="lost-pass-link">Mot De Passe Oublié?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                       S'inscrire
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Vous avez deja un compte  ? <a href="#">Connectez-vous !</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

@endsection
