<?php $__env->startSection('title'); ?>
    <?php echo e('HOME'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">

            <!-- Traffic sources -->
            <div class="panel panel">
                <div class="panel-heading">
                    <div class="panel-title"><strong>Admin Dashboard</strong></div>
                </div>

                <div class="panel-footer" style="padding-left:20px;">
                    You are logged in as <?php echo e(Auth::user()->name); ?>!
                </div>
            </div>
            <!-- /traffic sources -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_app',['select' => 'dashboard'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>