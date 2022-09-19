<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function home(){
      $three_article = Article::where('visibilite', 'normale')->take(3)->get();
      $twoarticle = Article::where('visibilite', 'populaire')->take(2)->get();
      return view('welcome',  compact('twoarticle',  'three_article'));

    }


    public function dashboard(){

        $candidat_accept = Candidature::where('user_id', Auth::user()->id)->where('etat' , 'valide')->get();
        $candidat_encours  = Candidature::where('user_id', Auth::user()->id)->where('etat' , 'encours')->get();
        $candidat_rejet  = Candidature::where('user_id', Auth::user()->id)->where('etat' , 'rejet')->get();
      $candidatures = Candidature::where('user_id' , Auth::user()->id)->get();
      $cand_take_cinq = Candidature::where('user_id' , Auth::user()->id)->take(10)->get();
        return view('dashboarduser.index' , compact('candidatures' , 'candidat_accept' , 'candidat_encours' , 'candidat_rejet', 'cand_take_cinq'));
    }
 




   

}
