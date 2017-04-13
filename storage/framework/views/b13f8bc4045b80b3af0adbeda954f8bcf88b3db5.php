
<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>ADMIN PANEL | <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->


<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>

    <!-- Global stylesheets -->
    
    
    <link href="<?php echo e(asset('css/admin_css/bootstrap.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/admin_css/core.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/admin_css/components.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/admin_css/colors.css')); ?>" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?php echo e(asset('js/admin_js/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/admin_js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/admin_js/ckeditor/ckeditor.js')); ?>"></script>
    <!-- /core JS files -->


    <script type="text/javascript" src="<?php echo e(asset('js/admin_js/app.js')); ?>"></script>

    <!-- /theme JS files -->
</head>
<body>

<!-- Main navbar -->
<div class="navbar navbar-default header-highlight">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo e('/'); ?>"><img src="<?php echo e(asset('image/logo.png')); ?>" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">

    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user-material">
                    <div class="category-content">
                        <div class="sidebar-user-material-content">
                            
                            
                            
                            <h6><?php echo e(Auth::user()->name); ?></h6>
                            <span class="text-size-small"><?php echo e(Auth::user()->email); ?></span>
                        </div>

                        <div class="sidebar-user-material-menu">
                            <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
                        </div>
                    </div>

                    <div class="navigation-wrapper collapse" id="user-nav">
                        <ul class="navigation">
                            <li><a href="#"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
                            <li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-switch2"></i> <span>Logout</span>
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                            <li class="<?php if($select === 'dashboard'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin'); ?>"><i class="icon-home4"></i> <span>Dashboard</span></a>
                            </li>

                            <li class="<?php if($select === 'carousel'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/carousel'); ?>"><i class="icon-stack2"></i> <span>Carousel</span></a>
                            </li>
                            <li class="<?php if($select === 'current_demand'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/current_demand'); ?>"><i class="icon-stack2"></i> <span>Current Demands</span></a>
                            </li>
                            <li class="<?php if($select === 'current_demand_img'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/current_demand_img'); ?>"><i class="icon-stack2"></i> <span>Current Demands Images</span></a>
                            </li>
                            <li class="<?php if($select === 'about'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/about'); ?>"><i class="icon-stack2"></i> <span>About Us</span></a>
                            </li>
                            <li class="<?php if($select === 'recruitment_procedure'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/recruitment_procedure'); ?>"><i class="icon-stack2"></i> <span>Recruitment Procedure</span></a>
                            </li>
                            <li class="<?php if($select === 'contact'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/contact'); ?>"><i class="icon-stack2"></i> <span>Contact Us</span></a>
                            </li>
                            <li class="<?php if($select === 'gallery'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/gallery'); ?>"><i class="icon-stack2"></i> <span>Gallery</span></a>
                            </li>
                            <li class="<?php if($select === 'recruitment_procedure'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/recruitment_procedure'); ?>"><i class="icon-stack2"></i> <span>Recruitment Procedure</span></a>
                            </li>
                            <li class="<?php if($select === 'overseas_client'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/overseas_client'); ?>"><i class="icon-stack2"></i> <span>Overseas Client</span></a>
                            </li>
                            <li class="<?php if($select === 'achiever'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/achiever'); ?>"><i class="icon-stack2"></i> <span>Achiever</span></a>
                            </li>
                            <li class="<?php if($select === 'corporate_field'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/corporate_field'); ?>"><i class="icon-stack2"></i> <span>Corporate Field</span></a>
                            </li>
                            <li class="<?php if($select === 'corporate_member'): ?> <?php echo e('active'); ?> <?php endif; ?>">
                                <a href="<?php echo e('/pasa_admin/corporate_member'); ?>"><i class="icon-stack2"></i> <span>Corporate Member</span></a>
                            </li>

                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
            <?php $__env->startSection('content'); ?>
            <?php echo $__env->yieldSection(); ?>
            <!-- /main charts -->





                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2017. Pasa IT Solution Pvt. Ltd.</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_2/LTR/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2017 05:57:31 GMT -->
</html>
