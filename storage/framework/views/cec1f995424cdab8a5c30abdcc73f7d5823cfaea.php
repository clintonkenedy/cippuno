<li>

    <div class="form-inline my-2">
        <div class="input-group" data-widget="sidebar-search" data-arrow-sign="&raquo;">

            
            <input class="form-control form-control-sidebar" type="search"
                <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?>
                placeholder="<?php echo e($item['text']); ?>"
                aria-label="<?php echo e($item['text']); ?>">

            
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-fw fa-search"></i>
                </button>
            </div>

        </div>
    </div>

</li>
<?php /**PATH C:\Users\AKELIOS\cipservice\cippuno\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/sidebar/menu-item-search-menu.blade.php ENDPATH**/ ?>