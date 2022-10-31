<?php $__env->startSection('admin'); ?>


<?php $__currentLoopData = $candidature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="content-wrapper" >
  <?php if($message=Session::get('edit')): ?>

<div class="row alert alert-success">

  <?php echo e($message); ?>

</div>

<?php endif; ?>
  <br>

<div class="container">
  <div class="col-md-11">
    <div class="row" >
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <div class="row">
            <div class="col-md-4" style="justify-content: center;padding-left:100px">
                 <img width="110px" height="110px" src="<?php echo e(asset('uploads/candidature/'.$candidat['photo'])); ?>" class="img-fluid">

            </div>
            <div class="col-md-4">
               <ul style="list-style: none ; font-weight:500">
                     <li>  Crée le : <?php echo e($candidat['created_at']); ?></li>
                     <li> Téléphone : <?php echo e($candidat['telephone_1']); ?></li>
                     <li> Adresse mail  : <?php echo e($candidat['email']); ?></li>
                     <?php if($candidat['etat'] == 'encours'): ?>
                     <li> Statut :En Attente De Validation</li>
                     <?php elseif($candidat['etat'] =='valide'): ?>
                     <li> Statut :Candidature  Valididée</li>
                     <?php elseif($candidat['etat'] =='rejet'): ?>
                     <li> Statut :Candidature Rejetée</li>

                        <?php endif; ?>
               </ul>
            </div>

            <div class="col-md-4">
            <a href="<?php echo e(route('admin.export', $candidat->id)); ?>" class="btn btn-light btn-rounded">Télécharger au format pdf</a>
          <a href="<?php echo e(route('destroy.admin' , $candidat['id'])); ?>" class="btn btn-danger btn-rounded">Supprimer la candidature</a>
          <a href="<?php echo e(route('edit.admin',$candidat['id'])); ?>" class="btn btn-secondary btn-rounded">Modifier la candidature</a>
           </div>



            <div class="col-md-4">
                 <img src="<?php echo e(asset('assets/images/logo/logov2.png')); ?>" alt="" srcset="">
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
                    <?php echo e($candidat['id']); ?>

                  </td>

                </tr>

                <tr>
                    <td>
                     Nom & prénoms
                    </td>
                    <td>
                      <?php echo e($candidat['nom']); ?>   <?php echo e($candidat['prenom']); ?>

                    </td>

                </tr>
                <tr>
                    <td>
                    sexe
                    </td>
                    <td>
                      <?php echo e($candidat['sexe']); ?>

                    </td>

                </tr>

                <tr>
                    <td>
                      Date de naissance
                    </td>
                    <td>
                      <?php echo e($candidat['date_de_naissance']); ?>

                    </td>


                </tr>
                <tr>
                    <td>
                      Lieu de naissance
                    </td>
                    <td>
                      <?php echo e($candidat['lieu_de_naissance']); ?>

                    </td>
                </tr>

                <tr>
                    <td>
                      Nationalité
                    </td>
                    <td>
                      <?php echo e($candidat['nationnalite']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                      Examen
                    </td>
                    <td>
                      <?php echo e($candidat['examen']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                     Filière
                    </td>
                    <td>
                      <?php echo e($candidat['filiere']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                     Candidature
                    </td>
                    <td>
                      <?php echo e($candidat['statut']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                     Ecole d'origine
                    </td>
                    <td>
                      <?php echo e($candidat['ecole_d_origine']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                    Serie du  bac
                    </td>
                    <td>
                      <?php echo e($candidat['serie_du_bac']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                    Matricule du bac
                    </td>
                    <td>
                      <?php echo e($candidat['matricule']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                      Nombres de points au bac
                    </td>
                    <td>
                      <?php echo e($candidat['points_au_bac']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                    Mention
                    </td>
                    <td>
                      <?php echo e($candidat['mention']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                    Centre de composition
                    </td>
                    <td>
                      <?php echo e($candidat['centre_de_composition']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                    Numéro de table
                    </td>
                    <td>
                      <?php echo e($candidat['numero_de_table']); ?>

                    </td>
                </tr>
                <tr>
                    <td>
                  Ville de composition
                    </td>
                    <td>
                      <?php echo e($candidat['ville']); ?>

                    </td>
                </tr>

                <tr>
                    <td>
                  Identifiants Permanant Par Defaut
                    </td>
                    <td>
                      <?php echo e($candidat['id_permanent']); ?>

                    </td>
                </tr>

                <tr>
                  <td>
                Numero BTS Par Defaut
                  </td>
                  <td>
                    <?php echo e($candidat['numero_bts']); ?>

                  </td>
              </tr>

              <tr>
                <td>
             Resultat Examen  BTS
                </td>
                <td>
                  <?php echo e($candidat['resultat']); ?>

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

</div>


</div>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>








<?php $__env->stopSection(); ?>

<?php echo $__env->make('administration.master.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bts\resources\views/administration/candidature/detaill.blade.php ENDPATH**/ ?>