

@foreach ($detail as $candidat)

<h1>Informations Sur la Candidature</h1>



<div class="row">
  <div class="col-lg-10 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
      <div class="row">
        <div class="col-md-4" style="justify-content: center;padding-left:100px">
             <img width="100px" height="100px" src="" class="img-fluid " alt="" srcset="">

        </div>
        <div class="col-md-4">
           <ul style="list-style: none ; font-weight:500">
                 <li>  Crée le : {{$candidat['created_at']}}</li>
                 <li> Téléphone : {{$candidat['telephone_1']}}</li>
                 <li> Adresse mail  : {{$candidat['email']}}</li>
                 @if($candidat['etat'] == 'encours')
                 <li> Statut :En Attente De Validation</li>
                 @elseif($candidat['etat'] =='valide')
                 <li> Statut :Candidature En Cours De Valididée</li>
                 @elseif($candidat['etat'] =='rejet')
                 <li> Statut :Candidature Rejetée</li>

                    @endif
           </ul>
        </div>
        <div class="col-md-4">
          
        </div>
      </div>
        <div class="table-responsive pt-3">
          <table class="table table-striped" id="example">

         <tbody>
            <tr>
              <td>
               id
              </td>
              <td>
                {{$candidat['id']}}
              </td>

            </tr>

            <tr>
                <td>
                 Nom & prénoms
                </td>
                <td>
                  {{$candidat['nom']}}   {{$candidat['prenom']}}
                </td>

            </tr>
            <tr>
                <td>
                sexe
                </td>
                <td>
                  {{$candidat['sexe']}}
                </td>

            </tr>

            <tr>
                <td>
                  Date de naissance
                </td>
                <td>
                  {{$candidat['date_de_naissance']}}
                </td>


            </tr>
            <tr>
                <td>
                  Lieu de naissance
                </td>
                <td>
                  {{$candidat['lieu_de_naissance']}}
                </td>
            </tr>

            <tr>
                <td>
                  Nationalité
                </td>
                <td>
                  {{$candidat['nationnalite']}}
                </td>
            </tr>
            <tr>
                <td>
                  Examen
                </td>
                <td>
                  {{$candidat['examen']}}
                </td>
            </tr>
            <tr>
                <td>
                 Filière
                </td>
                <td>
                  {{$candidat['filiere']}}
                </td>
            </tr>
            <tr>
                <td>
                 Candidature
                </td>
                <td>
                  {{$candidat['statut']}}
                </td>
            </tr>
            <tr>
                <td>
                 Ecole d'origine
                </td>
                <td>
                  {{$candidat['ecole_d_origine']}}
                </td>
            </tr>
            <tr>
                <td>
                Serie du  bac
                </td>
                <td>
                  {{$candidat['serie_du_bac']}}
                </td>
            </tr>
            <tr>
                <td>
                Matricule du bac
                </td>
                <td>
                  {{$candidat['matricule']}}
                </td>
            </tr>
            <tr>
                <td>
                  Nombres de points au bac
                </td>
                <td>
                  {{$candidat['points_au_bac']}}
                </td>
            </tr>
            <tr>
                <td>
                Mention
                </td>
                <td>
                  {{$candidat['mention']}}
                </td>
            </tr>
            <tr>
                <td>
                Centre de composition
                </td>
                <td>
                  {{$candidat['centre_de_composition']}}
                </td>
            </tr>
            <tr>
                <td>
                Numéro de table
                </td>
                <td>
                  {{$candidat['numero_de_table']}}
                </td>
            </tr>
            <tr>
                <td>
              Ville de composition
                </td>
                <td>
                  {{$candidat['ville']}}
                </td>
            </tr>

            <tr>
                <td>
              Identifiants Permanant Par Defaut
                </td>
                <td>
                  {{$candidat['id_permanent']}}
                </td>
            </tr>

            <tr>
              <td>
            Numero BTS Par Defaut
              </td>
              <td>
                {{$candidat['numero_bts']}}
              </td>
          </tr>

          <tr>
            <td>
         Resultat Examen  BTS
            </td>
            <td>
              {{$candidat['resultat']}}
            </td>
        </tr>


          </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endforeach

