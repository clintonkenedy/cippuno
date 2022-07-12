<li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="nav-item">

    <a class="nav-link <?php echo e($item['class']); ?> <?php if(isset($item['shift'])): ?> <?php echo e($item['shift']); ?> <?php endif; ?>"
       href="<?php echo e($item['href']); ?>" <?php if(isset($item['target'])): ?> target="<?php echo e($item['target']); ?>" <?php endif; ?>
       <?php echo $item['data-compiled'] ?? ''; ?>>

        <i class="<?php echo e($item['icon'] ?? 'far fa-fw fa-circle'); ?> <?php echo e(isset($item['icon_color']) ? 'text-'.$item['icon_color'] : ''); ?>"></i>

        <p>
            <?php echo e($item['text']); ?>


            <?php if(isset($item['label'])): ?>
                <span class="badge badge-<?php echo e($item['label_color'] ?? 'primary'); ?> right">
                    <?php echo e($item['label']); ?>

                </span>
            <?php endif; ?>
        </p>

    </a>

</li>
<?php /**PATH C:\Users\AKELIOS\cipservice\cippuno\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/sidebar/menu-item-link.blade.php ENDPATH**/ ?>