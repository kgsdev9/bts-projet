<?php $__env->startSection('document'); ?>

<div class="content-wrapper">


    <div class="container">



<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <h4 class="card-title">NOUVELLE CANDIDATURE</h4>


        <br>
          <div class="col-md-11" style="text-transform: uppercase;">
            <form class="forms-sample" action="<?php echo e(route('creer_candidature')); ?>" method="post"  enctype="multipart/form-data">
              <?php echo csrf_field(); ?>

                <?php if(session('succes')): ?>

                <div class="alert alert-success">
                        <?php echo e(session('succes')); ?>

                </div>

                <?php endif; ?>



              <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputName1 col-md-6">Nom  : <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le nom" name="nom" value="<?php echo e(old('nom')); ?>">
                  </div>
                  <div class="form-group  col-md-6">
                    <label for="exampleInputName1">Prénom : <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le prénom" name="prenom" value="<?php echo e(old('prenom')); ?>">
                  </div>
                </div>


                <div class="row">
                  <div class="form-group  col-md-6">
                    <label for="exampleInputName1">Date de naissance : <?php $__errorArgs = ['date_de_naissance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="JJ/MM/AA" name="date_de_naissance" value="<?php echo e(old('date_de_naissance')); ?>">
                  </div>
                  <div class="form-group  col-md-6">
                    <label for="exampleInputName1">Lieu de naissance : <?php $__errorArgs = ['lieu_de_naissance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le lieu de naissance" name="lieu_de_naissance" value="<?php echo e(old('lieu_de_naissance')); ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleSelectGender">Sexe :  <?php $__errorArgs = ['sexe'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                      <select class="form-control" id="exampleSelectGender" name="sexe" value="<?php echo e(old('sexe')); ?>">
                        <option value="">selectionner le sexe</option>
                        <option value="M">Masculin</option>
                        <option value="F">Feminin</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleSelectGender">Type de candidature :  <?php $__errorArgs = ['statut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                        <select class="form-control" id="exampleSelectGender" name="statut" value="<?php echo e(old('statut')); ?>">
                          <option value="">selection votre statut</option>
                          <option value="libre">Libre</option>
                          <option value="officielle">Officielle</option>
                        </select>
                      </div>

                </div>

                <div class="row">
                  <div class="form-group  col-md-6">
                    <label for="exampleInputCity1">Nationalité :  <?php $__errorArgs = ['nationnalite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Entrer votre nationalité" name="nationnalite" value="<?php echo e(old('nationnalite')); ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputCity1">Numéro de téléphone:  <?php $__errorArgs = ['telephone_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Entrer votre numéro  de telephone" name="telephone_1" value="<?php echo e(old('telephone_1')); ?>">
                  </div>
                  </div>

                  <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleSelectGender">Examen: <?php $__errorArgs = ['examen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                          <select class="form-control" id="exampleSelectGender" name="examen" value="<?php echo e(old('examen')); ?>">
                            <option value="">selectionner l'examen auquel vous postulez</option>

                            <option value="bts">BTS</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleSelectGender">Filière :  <?php $__errorArgs = ['filiere'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                            <select class="form-control" id="exampleSelectGender" name="filiere" value="<?php echo e(old('filiere')); ?>">
                              <option value="">selectionner la filière </option>
                              <option value="AUTRE">Veuillez choisir une option </option>
                              <option value="ATPV">ATPV/AGRICULTURE TROPICALE OPTION PRODUCTION VEGETALE</option>
                              <option value="ATPA">ATPA/AGRICULTURE TROPICALE OPTION PRODUCTION ANIMALE</option>
                              <option value="AACV">AACV/ARTS ET AMENAGEMENT DU CADRE DE VIE</option>
                              <option value="ADt">AD/ASSISTANAT DE DIRECTION</option>
                              <option value="CJPI">CJPI/CARRIERES JURIDIQUES ET PROFESSIONS IMMOBILIERES</option>
                              <option value="CV">CV/COMMUNICATION VISUELLE</option>
                              <option value="COS">COS/COSMETOLOGIE</option>
                              <option value="ELT">ELT/ELECTROTECHNIQUE</option>
                              <option value="FA">FA/FINANCES ASSURANCES</option>
                              <option value="FCGE">FCGE/FINANCES COMPTABILITE ET GESTION DES ENTREPRISES</option>
                              <option value="GBAT">GBAT/GENIE CIVIL OPTION BATIMENT</option>
                              <option value="GGT">GGT/GENIE CIVIL OPTION GEOMETRE TOPOGRAPHE</option>
                              <option value="GTP">GTP/GENIE CIVIL OPTION TRAVAUX PUBLICS</option>
                              <option value="GEE">GEE/GENIE ENERGETIQUE ET ENVIRONNEMENT</option>
                              <option value="GEC">GEC/GESTION COMMERCIALE</option>
                              <option value="GERN">GERN/GESTION DE L'ENVIRONNEMENT ET DES RESSOURCES NATURELLES</option>
                              <option value="GCT">GCT/GESTION DES COLLECTIVITES TERRITORIALES</option>
                              <option value="HST">HST/HYGIENE ET SECURITE DU TRAVAIL</option>
                              <option value="IACC">IACC/INDUSTRIES AGRO-ALIMENTAIRES ET CHIMIQUES OPTION CONTROLE</option>
                               <option value="IACP">IACP/INDUSTRIES AGRO-ALIMENTAIRES ET CHIMIQUES OPTION PRODUCTION</option>
                               <option value="IDA">IDA/INFORMATIQUE DEVELOPPEUR D'APPLICATIONS</option>
                               <option value="LOG">LOG/LOGISTIQUE</option>
                               <option value="MSP">MSP/MAINTENANCE DES SYSTEMES DE PRODUCTION</option>
                               <option value="MGP">MGP/MINES GEOLOGIE ET PETROLE</option>
                               <option value="2MA">2MA/Moteur et Mécanique Automobile</option>
                               <option value="OPL">OPL/OPTIQUE LUNETTERIE</option>
                               <option value="RIT">RIT/RESEAUX INFORMATIQUES ET TELECOMMUNICATIONS</option>
                               <option value="RHC">RHC/RESSOURCES HUMAINES ET COMMUNICATION</option>
                               <option value="SIN">SIN/SCIENCES DE L'INFORMATION</option>
                               <option value="SIP">SIP/SECURITE INCENDIE ET PREVENTION</option>
                               <option value="SEI">SEI/SYSTEMES ELECTRONIQUES ET INFORMATIQUES</option>
                               <option value="TH">TH/TOURISME HOTELLERIE</option>
                               <option value="URBA">URBA/URBANISME</option>

                            </select>
                          </div>

                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1 col-md-6">Ecole d'origine :  <?php $__errorArgs = ['ecole_d_origine'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer l'école d'origine" name="ecole_d_origine" value="<?php echo e(old('ecole_d_origine')); ?>">
                      </div>
                      <div class="form-group  col-md-6">
                        <label for="exampleInputName1">Matricule:  <?php $__errorArgs = ['matricule'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  </label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le matricule" name="matricule" value="<?php echo e(old('matricule')); ?>">
                      </div>
                    </div>



                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleSelectGender">Série du  bac :  <?php $__errorArgs = ['serie_du_bac'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                          <select class="form-control" id="exampleSelectGender" name="serie_du_bac" value="<?php echo e(old('serie_du_bac')); ?>">
                            <option value="">selectionner la serie </option>

                            <option value="A2">A2</option>
                              <option value="A1">A1</option>
                              <option value="C">C</option>
                              <option value="D">D</option>
                              <option value="E">E</option>
                              <option value="G1">G1</option>
                              <option value="G2">G2</option>
                              <option value="B">B</option>
                              <option value="BT">BT</option>
                              <option value="H1">H1</option>
                              <option value="H2">H2</option>
                              <option value="H3">H3</option>
                              <option value="F1">F1</option>
                              <option value="F2">F2</option>
                              <option value="F3">F3</option>
                              <option value="F4">F4</option>
                               <option value="F7">F7</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleSelectGender">Mention : <?php $__errorArgs = ['mention'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                            <select class="form-control" id="exampleSelectGender" name="mention" value="<?php echo e(old('mention')); ?>">
                              <option value="">selectionner la mention</option>
                              <option value="PASSABLE">PASSABLE</option>
                              <option value="ASSEZ-BIEN">ASSEZ-BIEN</option>
                              <option value="BIEN">BIEN</option>
                              <option value="TRES BIEN">TRES BIEN</option>
                            </select>
                          </div>

                    </div>


                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1 col-md-6">Nombre de points au bac : <?php $__errorArgs = ['points_au_bac'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Entrer le nombre de points au bac" name="points_au_bac" value="<?php echo e(old('points_au_bac')); ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1 col-md-6">Numero de table  <?php $__errorArgs = ['numero_de_table'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le numero de table" name="numero_de_table" value="<?php echo e(old('numero_de_table')); ?>">
                      </div>

                    </div>


                    <div class="row">
                      <div class="form-group  col-md-6">
                        <label for="exampleInputName1">ville de composition :  <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                              <select name="ville"  class="form-control">
                                  <option value="abidjan">Abidjan</option>
                                  <option value="bouake">Bouake</option>
                                  <option value="yamoussoukro">Yamoussoukro</option>
                                  <option value="khoroho">Khorogo</option>
                                  <option value="abengourou">Abengourou</option>
                                  <option value="daloa">Daloa</option>
                                  <option value="san pedro">San Pedro</option>
                                  <option value="odienne">Odienne</option>
                                  <option value="adzope">Adzope  </option>
                                  <option value="man">Man</option>
                                  <option value="bouake">Bouake</option>

                              </select>

                          </div>

                      <div class="form-group  col-md-6">
                        <label for="exampleInputName1">Centre de composition Du BAC :  <?php $__errorArgs = ['centre_de_composition'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le centre de composition" name="centre_de_composition" value="<?php echo e(old('centre_de_composition')); ?>">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group  col-md-6">
                        <label for="exampleInputName1">Email : <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small style="color: red"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  </label>
                        <input type="email" class="form-control" id="exampleInputName1" placeholder="Entrer votre adresse email" name="email" value="<?php echo e(old('email')); ?>">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="exampleInputCity1">Ajouter une photo : </label>
                        <input type="file" class="form-control" id="exampleInputCity1" placeholder="Location" name="photo">
                      </div>
                    </div>




                <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">

            <button type="submit" class="btn btn-primary mr-2">Soumettre</button> &nbsp;
            <a href="<?php echo e(route('home_dashboard')); ?>"  class="text-white">Annuler</a>
            <br><br>
          </form>

          </div>


      </div>
    </div>
  </div>



    </div>

    </div>

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboarduser.apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bts\resources\views/dashboarduser/candidature/ajout.blade.php ENDPATH**/ ?>