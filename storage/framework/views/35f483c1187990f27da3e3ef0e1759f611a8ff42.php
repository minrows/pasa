<?php $__env->startSection('title'); ?>
    <?php echo e('ABOUT US'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .modal-dialog {
            width: 60%;
        }
    </style>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <!-- Traffic sources -->
            <div class="panel panel-flat">
                
                <div class="panel-heading">
                    <div class="panel-title">
                        <?php if(session()->has('message')): ?>
                            <h1 align="center" class="alert alert-success"><?php echo e(session()->get('message')); ?></h1>
                        <?php endif; ?>
                        <h1 align="center">Edit/Delete About Page</h1>
                        <a class="btn btn-default pull-right" data-toggle="modal" data-target="#add_new_modal">Add New</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sn.</th>
                                    <th><strong>Title</strong></th>
                                    <th><strong>State</strong></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $i=1;
                             ?>
                            <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i); ?></td>
                                    <td><?php echo e($about->title); ?></td>
                                    <td><?php echo e($about->state); ?></td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#edit_modal_<?php echo e($about->id); ?>">Edit</a>
                                        &nbsp;

                                        <a href="<?php echo e('/pasa_admin/delete_about'); ?>"
                                           onclick="event.preventDefault();
                                                   document.getElementById('delete-form_<?php echo e($about->id); ?>').submit();"
                                           class="btn btn-primary">
                                            Delete
                                        </a>

                                        <form id="delete-form_<?php echo e($about->id); ?>" action="<?php echo e('/pasa_admin/delete_about'); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                            <input type="hidden" value="<?php echo e($about->id); ?>" id="del_id" name="del_id" />
                                        </form>
                                    </td>
                                </tr>
                                <?php 
                                    $i++;
                                 ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>
                    </div>
                            
                </div>
            </div>
            <!-- /traffic sources -->
        </div>
    </div>

    <div id="add_new_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" class="modal-title">Add New About Us Page</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="add_new" id="add_new" action="<?php echo e('/pasa_admin/add_about'); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <fieldset>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label"><strong>Page Title:</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title!" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-lg-2 control-label"><strong>Description:</strong></label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description!" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state" class="col-lg-2 control-label">State:</label>
                                <div class="col-lg-10">
                                    <select name="state" id="state" class="form-control">
                                        <option selected>on</option>
                                        <option>off</option>
                                    </select>
                                </div>
                            </div>
                                                       
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-default pull-right">Add</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div id="edit_modal_<?php echo e($about->id); ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center" class="modal-title">Edit About Us Pages</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="edit_<?php echo e($about->id); ?>" id="edit_<?php echo e($about->id); ?>" action="<?php echo e('/pasa_admin/update_about'); ?>" method="post" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <fieldset>
                                <div class="form-group">
                                    <label for="id" class="col-lg-2 control-label">Id:</label>
                                    <div class="col-lg-10">
                                        <input type="text" readonly class="form-control" id="id" name="id" value="<?php echo e($about->id); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Page Title:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="title" name="title" value="<?php echo e($about->title); ?>" placeholder="Enter Page Title!">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description_<?php echo e($about->id); ?>" class="col-lg-2 control-label">Description:</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" id="description_<?php echo e($about->id); ?>" name="description_<?php echo e($about->id); ?>" placeholder="Enter Description!"><?php echo e($about->description); ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="state" class="col-lg-2 control-label">State:</label>
                                    <div class="col-lg-10">
                                        <select name="state" id="state" class="form-control">
                                            <option <?php if($about->state==='on'): ?> <?php echo e('selected'); ?> <?php endif; ?>>on</option>
                                            <option <?php if($about->state==='off'): ?> <?php echo e('selected'); ?> <?php endif; ?>>off</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-default pull-right">Edit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <script type="text/javascript">
        CKEDITOR.replace( "description" );
    </script>

    <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script type="text/javascript">
            CKEDITOR.replace( "description_<?php echo e($about->id); ?>" );
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_app',['select' => 'about'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>