<?php $__env->startSection('content'); ?>


<div class="popular-courses default-padding bottom-less without-carousel">
    <div class="container">
        <div class="row">
            <div class="popular-courses-items">


                            <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height" style="height: 647px;">
                    <div class="item">
                        <div class="thumb">

                            <div class="price">INSTITUT ROOSVELET</div>
                        </div>
                        <div class="info">
                            <div class="author-info">
                                <div class="thumb">
                                    <a href="#"><img src="<?php echo e(asset('uploads/articles/'.$c->image)); ?>" alt="Thumb"></a>
                                </div>
                                <div class="others">
                                    <a href="#">INSTITUT ROOSVELET</a>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>

                                    </div>
                                </div>
                            </div>
                            <h4><a href="#"><?php echo e(Str::limit($c->name_article, 20)); ?></a></h4>
                            <p>
                                <?php echo e(Str::limit($c->description, 90)); ?>

                            </p>
                            <div class="bottom-info">
                                <ul>
                                    <li>
                                        <i class="fas fa-user"></i>ISPR
                                    </li>

                                </ul>
                                <a href="<?php echo e(route('content.index', $c->id)); ?>">Lire La suite</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bts\resources\views/publication/news.blade.php ENDPATH**/ ?>