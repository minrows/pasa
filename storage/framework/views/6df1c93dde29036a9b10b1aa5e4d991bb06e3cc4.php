<?php $__env->startSection('title'); ?>
    <?php echo e('RECRUITMENT PROCEDURE'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if($sel==null || $sel==""): ?>
        <?php  $sel=$rps[0]['title'];  ?>
    <?php endif; ?>
    <style>
        h3{
            color:lightcyan;
        }
        h4{
            margin:0;
        }
    </style>
    <div class="container-fluid spadding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="header h1" id="about-us">Recruitment Procedure</h1>
                    <div class="banner-center">
                        <div class="banner-inner" id="introduction">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
                                    <?php  $i=1; ?>
                                    <?php $__currentLoopData = $rps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="<?php if($sel==$rp->title): ?> <?php echo e('active'); ?> <?php endif; ?>"><a id="about-title" href="#tab_<?php echo e($rp->id); ?>" data-toggle="tab"><?php echo e($rp->title); ?></a></li>
                                        <?php  $i++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                <!-- Tab panes -->
                                <br/>
                                <br/>
                                <br/>
                                <div class="tab-content">
                                    <?php  $i=1; ?>
                                    <?php $__currentLoopData = $rps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tab-pane <?php if($sel==$rp->title): ?> <?php echo e('active'); ?> <?php endif; ?>" id="tab_<?php echo e($rp->id); ?>">
                                            <h2><?php echo e($rp->title); ?></h2>
                                            <div class="JustifyLeft"><?php echo html_entity_decode($rp->description); ?></div>
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