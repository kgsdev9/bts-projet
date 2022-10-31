<?php $__env->startSection('admin'); ?>
    
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
              <h3 class="box-title">TOUTES LES CANDIDATURES </h3>

              <div class="box-tools">
                <div class="input-group input-group-sm search" style="width: 150px;">
                <input type="text" name="search" id="searchproducts"  placeholder="rechercher.." class="form-control">



                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table-bordered">


                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Nationalite</th>
                  <th>Telephone</th>
                  <th>Statut</th>
                  <th>Matricule</th>
                  <th>User</th>
                  <th>Etat</th>

                  <th>Actions</th>
                </tr>
                <tbody>
                <?php $__currentLoopData = $allcandidature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>

                <td> <?php echo e($candidature->nom); ?>  </td>
                <td> <?php echo e($candidature->prenom); ?>  </td>
                <td> <?php echo e($candidature->nationnalite); ?>  </td>
                <td> <?php echo e($candidature->telephone_1); ?></td>
                <td> <?php echo e($candidature->statut); ?>  </td>
                <td> <?php echo e($candidature->matricule); ?>  </td>
                <td> <?php echo e($candidature->user->name); ?>  </td>
                <td>
                  <?php if($candidature->etat =='encours'): ?>
                  <span class="label label-warning">En Cours</span>
                  <?php elseif($candidature->etat =='valide'): ?>
                  <span class="label label-success">Approuvée</span>
                  <?php elseif($candidature->etat =='rejet'): ?>
                  <span class="label label-danger">Rejetée</span>
                  <?php endif; ?>

                </td>

                <td>
                <a  href="<?php echo e(route('detail.admin', $candidature->id)); ?>" class="btn btn-primary">Details</a>
                <a href="<?php echo e(route('admin.reserve', $candidature->id)); ?>"class="btn btn-warning">Changer l'etat</a>

                </td>


             </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tbody  id="Content" class="searchdata"></tbody>
              </table>




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




<?php echo $__env->make('administration.master.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bts\resources\views/administration/candidatureuser/liste.blade.php ENDPATH**/ ?>