<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('administration.userlist.index' , compact('users'));
    }


    public function edit_user($id) {

        $edit_user = User::where('id' , $id)->first();
            return view('gestion_utilisateur.edit', compact('edit_user'));
    }

    public function update_user(Request $request, $id) {

        $update_user = User::find($id);

        $update_user->name  =  $request->input('name');
        $update_user->email  =  $request->input('email');
        $update_user->role  =  $request->input('role');
        $update_user->update();
        return   redirect()->route('edit.user' , $update_user->id)->with('message' , 'Votre profil a été modifé avec succes');

    }


    public function destroy_user($id)   {
        $remove_user  =  User::find($id)->delete();

        return   redirect()->route('listes.users')->with('message' , 'Cet Utilisateur a été supprimé avec success');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.candidature.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->input();

        Validator::make($inputs,[
       "nom" =>['required','string','max:255'] ,
       "prenom" =>['required','string','max:255'] ,
       "date_de_naissance" =>['required','string','max:255'] ,
       "lieu_de_naissance" =>['required','string','max:255'] ,
       "sexe" =>['required','string','max:255'] ,
       "statut" =>['required','string','max:255'] ,
       "nationnalite" =>['required','string','max:255'] ,
       "telephone_1" =>['required',] ,
       "examen" =>['required','string','max:255'] ,
       "filiere" =>['required','string','max:255'] ,
       "ecole_d_origine" =>['required','string','max:255'] ,
       "matricule" =>['required','string','max:255', Rule::unique(Candidature::class)] ,
       "serie_du_bac" =>['required','string','max:255'] ,
       "mention" =>['required','string','max:255'] ,
       "points_au_bac" =>['required',] ,
       "numero_de_table" =>['required','string','max:255'] ,
       "ville" =>['required','string','max:255'] ,
       "centre_de_composition" =>['required','string','max:255'] ,
       "email" =>['required','string','max:255'] ,
       "user_id" =>['required']
         ])->validate();

         if($request->file('photo')!=null){

            $filename = time().$request->file('photo')->getClientOriginalName();
            $path =$request->file('photo')->storeAs('candidats/photo',$filename,'public');
            $file ='/storage/'.$path;
        }else{
            $file = null;
        }
       $candidat =  Candidature::create([

            "nom" =>$inputs['nom'],
            "prenom" => $inputs['prenom'],
            "date_de_naissance" => $inputs['date_de_naissance'],
            "lieu_de_naissance" =>$inputs['lieu_de_naissance'],
            "sexe" => $inputs['sexe'],
            "statut" =>$inputs['statut'],
            "nationnalite" =>$inputs['nationnalite'],
            "telephone_1" =>$inputs['telephone_1'],
            "examen" => $inputs['examen'],
            "filiere" => $inputs['filiere'],
            "ecole_d_origine" => $inputs['ecole_d_origine'],
            "matricule" =>$inputs['matricule'],
            "serie_du_bac" =>$inputs['serie_du_bac'],
            "mention" =>$inputs['mention'],
            "points_au_bac" =>$inputs['points_au_bac'],
            "numero_de_table" =>$inputs['numero_de_table'],
            "ville" => $inputs['ville'],
            "centre_de_composition" =>$inputs['centre_de_composition'],
            "email" => $inputs['email'],
            "photo"=>$file,
            "user_id" =>$inputs['user_id'],

        ]);

        return redirect()->route('admin.create')->with('admin-success',' Candidature soumis avec succès !');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_candidature)
    {
        $Candidature = Candidature::where('id',$id_candidature)->get();

        return view('administration.candidature.detaill',[
            'candidature'=>$Candidature
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_candidature)
    {
        $admin_edit = Candidature::where('id',$id_candidature)->get();
        return view('administration.candidature.edit',[

            'candidat'=>$admin_edit
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id) {

        $candidat = Candidature::find($id);

        Validator::make($request->all(),[
            "nom" =>['required','string','max:255'] ,
            "prenom" =>['required','string','max:255'] ,
            "date_de_naissance" =>['required','string','max:255'] ,
            "lieu_de_naissance" =>['required','string','max:255'] ,
            "sexe" =>['required','string','max:255'] ,
            "statut" =>['required','string','max:255'] ,
            "nationnalite" =>['required','string','max:255'] ,
            "telephone_1" =>['required'] ,
            "examen" =>['required','string','max:255'] ,
            "filiere" =>['required','string','max:255'] ,
            "ecole_d_origine" =>['required','string','max:255'] ,
            "matricule" =>['required','string','max:255'] ,
            "serie_du_bac" =>['required','string','max:255'] ,
            "mention" =>['required','string','max:255'] ,
            "points_au_bac" =>['required'] ,
            "numero_de_table" =>['required','string','max:255'] ,
            "ville" =>['required','string','max:255'] ,
            "centre_de_composition" =>['required','string','max:255'] ,
            "email" =>['required','string','max:255'] ,
            "user_id" =>['required']
              ])->validate();

              $candidat->nom = $request->input('nom');
              $candidat->prenom = $request->input('prenom');
              $candidat->date_de_naissance = $request->input('date_de_naissance');
              $candidat->lieu_de_naissance = $request->input('lieu_de_naissance');
              $candidat->sexe = $request->input('sexe');
              $candidat->statut = $request->input('statut');
              $candidat->nationnalite = $request->input('nationnalite');
              $candidat->telephone_1 = $request->input('telephone_1');
              $candidat->examen = $request->input('examen');
              $candidat->filiere = $request->input('filiere');
              $candidat->examen = $request->input('examen');
              $candidat->ecole_d_origine = $request->input('ecole_d_origine');
              $candidat->matricule = $request->input('matricule');
              $candidat->serie_du_bac = $request->input('serie_du_bac');
              $candidat->mention = $request->input('mention');
              $candidat->points_au_bac = $request->input('points_au_bac');
              $candidat->numero_de_table = $request->input('numero_de_table');
              $candidat->ville = $request->input('ville');
              $candidat->centre_de_composition = $request->input('centre_de_composition');
              $candidat->email = $request->input('email');

//20 champs
              $candidat->update();

             return redirect()->route('detail.admin', $request->input('id_candidature'));

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remove = Candidature::find($id)->delete();
        return redirect()->route('list.admin');
    }

    public function home() {


        $allcandidature =  Candidature::all();
        $allusers = User::all();
        $demande = Candidature::where('etat' , 'valide')->get();
        $candidature_encours = Candidature::where('etat', 'encours')->get();
        return view('administration.master.master', compact('allcandidature', 'allusers' , 'demande' , 'candidature_encours'));
    }


    public function all() {

        $allcandidature = Candidature::paginate(10);
        return view('administration.candidatureuser.liste', compact('allcandidature'));
    }

    public function afterstatut(Request $request , $id) {


        $lastinput = Candidature::find($id);
        $lastinput->etat  = $request->input('confirm');  //champs1
        $lastinput->numero_bts = $request->input('numero_bts');//champs2
        $lastinput->id_permanent = $request->input('id_permanent'); // champs3
        $lastinput->resultat = $request->input('resultat_bts'); //champs4

        $lastinput->update();
        return redirect()->route('all.actions');
    }


    public function voir($id_candidature) {


       $find  = Candidature::find($id_candidature);



        return view('dashboard.admin.users.admininput', compact('find'));

    }


    public function valide() {

        $candidat_valide = Candidature::where('etat' , 'valide')->get();
        return view('administration.candidatureuser.candidaturevalide', compact('candidat_valide'));
    }

    public function failled()  {
        $candidat_rejet = Candidature::where('etat' , 'rejet')->get();
        return view('administration.candidatureuser.canddiaturefailled', compact('candidat_rejet'));
    }

    public function en_cours() {
        $candidat_encours = Candidature::where('etat' , 'encours')->get();
        return view('administration.candidatureuser.candidatureencours' , compact('candidat_encours'));
    }

    public function liste_admin() {
        $candidat_admin =  Candidature::where('user_id' , Auth::user()->id)->get();

        return view('administration.candidature.list' , compact('candidat_admin'));
    }

    public function search(Request $request) {

        $output   = "" ;

        $candidature =  Candidature::where('id' , 'LIKE' , '%'.$request->search. '%')
        ->orwhere('nom', 'LIKE', '%'.$request->search. '%')
        ->orwhere('prenom', 'LIKE', '%'.$request->search. '%')
        ->orwhere('date_de_naissance', 'LIKE', '%'.$request->search. '%')
        ->orwhere('statut', 'LIKE', '%'.$request->search. '%')
        ->orwhere('filiere', 'LIKE', '%'.$request->search. '%')
        ->orwhere('etat', 'LIKE', '%'.$request->search. '%')->get();


        foreach($candidature as $candidature){

            $output .=

                '<tr>
                <td>  ' .$candidature->id.'</td>
                <td>  ' .$candidature->nom.'</td>
                <td>  ' .$candidature->prenom.'</td>
                <td>  ' .$candidature->date_de_naissance.'</td>
                <td>  ' .$candidature->statut.'</td>
                <td>  ' .$candidature->filiere.'</td>
                <td >  ' .$candidature->etat.'</td>
                <td>
                '.'

                <a href="/admin/newinput/'  .$candidature->id.' " class="btn btn-dark">'.'Changer L\'Etat</a>
                <a href="/admin/candidature/detaisl/'  .$candidature->id.' " class="btn btn-warning">'.'Details</a>

                '.'</td>

                </tr>';
        }

        return response($output);

    }



}
