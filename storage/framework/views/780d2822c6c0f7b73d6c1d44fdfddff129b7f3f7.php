<li class="nav-item">

    
    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
    </a>

    
    <div class="navbar-search-block">
        <form class="form-inline" action="<?php echo e($item['href']); ?>" method="<?php echo e($item['method']); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="input-group">

                
                <input class="form-control form-control-navbar" type="search"
                    <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?>
                    name="<?php echo e($item['input_name']); ?>"
                    placeholder="<?php echo e($item['text']); ?>"
                    aria-label="<?php echo e($item['text']); ?>">

                
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

            </div>
        </form>
    </div>

</li>
<?php /**PATH C:\Users\AKELIOS\cipservice\cippuno\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/navbar/menu-item-search-form.blade.php ENDPATH**/ ?>