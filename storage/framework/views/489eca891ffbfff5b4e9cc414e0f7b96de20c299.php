

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
              <h3 class="box-title">TOUTES LES CANDIDATURES VALIDEES   </h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <input type="search" name="search" id="search" placeholder="rechercher.." class="form-control">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
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
                  <th>Telephone</th>
                  <th>User</th>
                  <th>Etat</th>
              
                  <th>Actions</th>
                </tr>
                <tbody>
                <?php $__currentLoopData = $candidat_valide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
               
                <td> <?php echo e($candidature->nom); ?>  <?php echo e($candidature->prenom); ?></td>
                <td> <?php echo e($candidature->nationnalite); ?>  </td>
                <td> <?php echo e($candidature->telephone_1); ?></td>
                <td> <?php echo e($candidature->statut); ?>  </td>
                <td> <?php echo e($candidature->matricule); ?>  </td>
                <td> <?php echo e($candidature->telephone_1); ?>  </td>
                <td> <?php echo e($candidature->user->name); ?>  </td>
                <td>   <span class="label label-success"><?php echo e($candidature->etat); ?></span> </td>
             
                <td>
                <a href="<?php echo e(route('detail.admin' , $candidature->id)); ?>" class="btn btn-primary">Details</a>

                </td>


             </tr>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           

                 
                </tbody>
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

<?php $__env->startSection('extra-js'); ?>

<script>
        $('#search').on('keyup', function(){


                $value = $(this).val();

                $.ajax({

                        type:  'get' ,
                        url : '<?php echo e(URL::to('search')); ?>' ,
                        data:{'search' : $value},

                        success:function(data) {
                            console.log(data);
                            $('#Content').html(data);
                        }

                });

        })

  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('administration.master.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bts\resources\views/administration/candidatureuser/candidaturevalide.blade.php ENDPATH**/ ?>