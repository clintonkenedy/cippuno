<?php $navbarItemHelper = app('JeroenNoten\LaravelAdminLte\Helpers\NavbarItemHelper'); ?>

<?php if($navbarItemHelper->isSearch($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-search-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($navbarItemHelper->isNotification($item)): ?>

    
    <?php if (isset($component)) { $__componentOriginalea25d682fe35886a6e5123e3fa401e238557a9b8 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Layout\NavbarNotification::class, ['id' => $item['id'],'icon' => $item['icon'],'iconColor' => $item['icon_color'] ?? null,'badgeLabel' => $item['label'] ?? null,'badgeColor' => $item['label_color'] ?? null,'updateCfg' => $item['update_cfg'] ?? null,'enableDropdownMode' => $item['dropdown_mode'] ?? null,'dropdownFooterLabel' => $item['dropdown_flabel'] ?? null]); ?>
<?php $component->withName('adminlte-navbar-notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item['href'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalea25d682fe35886a6e5123e3fa401e238557a9b8)): ?>
<?php $component = $__componentOriginalea25d682fe35886a6e5123e3fa401e238557a9b8; ?>
<?php unset($__componentOriginalea25d682fe35886a6e5123e3fa401e238557a9b8); ?>
<?php endif; ?>

<?php elseif($navbarItemHelper->isFullscreen($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-fullscreen-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($navbarItemHelper->isDarkmode($item)): ?>

    
    <?php if (isset($component)) { $__componentOriginalfd8411198f1eb1fae2ac5219b8cf8824687a7c1f = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Layout\NavbarDarkmodeWidget::class, ['iconEnabled' => $item['icon_enabled'] ?? null,'colorEnabled' => $item['color_enabled'] ?? null,'iconDisabled' => $item['icon_disabled'] ?? null,'colorDisabled' => $item['color_disabled'] ?? null]); ?>
<?php $component->withName('adminlte-navbar-darkmode-widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd8411198f1eb1fae2ac5219b8cf8824687a7c1f)): ?>
<?php $component = $__componentOriginalfd8411198f1eb1fae2ac5219b8cf8824687a7c1f; ?>
<?php unset($__componentOriginalfd8411198f1eb1fae2ac5219b8cf8824687a7c1f); ?>
<?php endif; ?>

<?php elseif($navbarItemHelper->isSubmenu($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-dropdown-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($navbarItemHelper->isLink($item)): ?>

    
    <?php echo $__env->make('adminlte::partials.navbar.menu-item-link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<?php /**PATH C:\Users\AKELIOS\cipservice\cippuno\vendor\jeroennoten\laravel-adminlte\src/../resources/views/partials/navbar/menu-item.blade.php ENDPATH**/ ?>