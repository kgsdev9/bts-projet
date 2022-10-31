<?php $__env->startSection('content'); ?>

    <!-- Start Login
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="<?php echo e(route('login')); ?>" id="login-form" class="white-popup-block" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="col-md-4 login-social">

                            <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>


                        </div>
                        <div class="col-md-8 login-custom">
                            <h4>Connexion Sur Institut Roosvelet!</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Votre Adreesse E-mail*" type="email" name="email">
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
                                      Se Connecter
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Vous n'avez pas de  compte  ? <a href="<?php echo e(route('register')); ?>">Inscrivez-vous !</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bts\resources\views/auth/login.blade.php ENDPATH**/ ?>