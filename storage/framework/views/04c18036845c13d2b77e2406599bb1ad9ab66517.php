

<?php $__env->startSection('document'); ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
       
        
      </div>
      <!-- /.row -->
      <div class="row">

       
        <div class="col-xs-12">

          <div class="box">


            <div class="box-header">
              <h3 class="box-title">MES CANDIDATURES REJETEES </h3>

       
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered">
                <tr>
                  <th>Nom Et Prenom</th>
                  <th>Nationalite</th>
                  <th>Telephone</th>
                  <th>Statut</th>
                  <th>Matricule</th>
                  <th>Filiere</th>
                  <th>Etat</th>
                  <th>Actions</th>
                </tr>
               
                <?php $__currentLoopData = $candidat_rejet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                
                  <td> <?php echo e($candidature->nom); ?>  <?php echo e($candidature->prenom); ?></td>
                  <td> <?php echo e($candidature->nationnalite); ?>  </td>
                  <td> <?php echo e($candidature->telephone_1); ?></td>
                  <td> <?php echo e($candidature->statut); ?>  </td>
                  <td> <?php echo e($candidature->matricule); ?>  </td>
                  <td> <?php echo e($candidature->filiere); ?>  </td>
                  <td>  <span class="label label-danger"><?php echo e($candidature->etat); ?></span></td>
                  <td>
                    <a href="<?php echo e(route('detail_candidature', $candidature->id)); ?>" class="btn btn-dark">Details</a>
                  </td>

                </tr>
                

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>

              <div style="margin-left:5px;">
                <?php echo e($candidat_rejet->links()); ?>

              </div>
            

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
       
      </div>
    </section>
 



    <!-- /.content -->
  </div>
  
 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboarduser.apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bts\resources\views/dashboarduser/candidature/candidaturerejet.blade.php ENDPATH**/ ?>