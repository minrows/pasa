<?php $__env->startSection('title'); ?>
    <?php echo e('ABOUT'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid spadding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="header h1" id="about-us">About Us</h1>
                    <div class="banner-center">
                        <div class="banner-inner" id="introduction">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
                                    <?php  $i=1; ?>
                                    <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="<?php if($i==1): ?> <?php echo e('active'); ?> <?php endif; ?>"><a href="#tab_<?php echo e($about->id); ?>" data-toggle="tab"><?php echo e($about->title); ?></a></li>
                                        <?php  $i++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php  $i=1; ?>
                                    <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tab-pane <?php if($i==1): ?> <?php echo e('active'); ?> <?php endif; ?>" id="tab_<?php echo e($about->id); ?>">
                                            <h2><?php echo e($about->title); ?></h2>
                                            <div class="JustifyLeft"><?php echo html_entity_decode($about->description); ?></div>
                                        </div>
                                        <?php  $i++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.page_app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>