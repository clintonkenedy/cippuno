<aside class="main-sidebar <?php echo e(config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4')); ?>">

    
    <?php if(config('adminlte.logo_img_xl')): ?>
        <?php echo $__env->make('adminlte::partials.common.brand-logo-xl', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('adminlte::partials.common.brand-logo-xs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column <?php echo e(config('adminlte.classes_sidebar_nav', '')); ?>"
                data-widget="treeview" role="menu"
                <?php if(config('adminlte.sidebar_nav_animation_speed') != 300): ?>
                    data-animation-speed="<?php echo e(config('adminlte.sidebar_nav_animation_speed')); ?>"
                <?php endif; ?>
                <?php if(!config('adminlte.sidebar_nav_accordion')): ?>
                    data-accordion="false"
                <?php endif; ?>>
                
                <?php echo $__env->renderEach('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item'); ?>
            </ul>
        </nav>
    </div>

</aside>
<?php /**PATH C:\Users\AKELIOS\cipservice\cippuno\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/sidebar/left-sidebar.blade.php ENDPATH**/ ?>