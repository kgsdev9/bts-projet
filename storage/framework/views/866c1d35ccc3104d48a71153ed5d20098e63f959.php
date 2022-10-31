<?php $__env->startSection('content'); ?>

<div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="<?php echo e(route('register')); ?>" id="register-form" class="white-popup-block" method="POST">
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
                            <h4>INSCRIPTION SUR INSTITUT ROOSVELET</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Entrer votre nom d'utilisateurl*" type="text" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Votre Adresse E-mail*" type="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Votre mot de passe*" type="password" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Confirmer Votre Mot de passe*" type="password" name="password_confirmation">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                      S'inscrire
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Vous avez deja un compte ? <a href="<?php echo e(route('login')); ?>">Connexion</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bts\resources\views/auth/register.blade.php ENDPATH**/ ?>