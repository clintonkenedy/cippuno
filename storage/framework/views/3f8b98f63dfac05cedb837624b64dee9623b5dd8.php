

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container px-4 py-5" id="custom-cards"">
        <div class="row justify-content-center">
        <h2 class="pb-2 border-bottom">Bienvenido  <?php echo e(auth()->user()->name); ?> </h2>

            <h1></h1>
            
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <a href="tramites.crear">
          <div class="card card-cover h-100 overflow-hidden text-white bg-red rounded-4 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Crear nuevo tramite</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>
      <div class="col">
        <a href="tramites.mostrar">
          <div class="card card-cover h-100 overflow-hidden text-white bg-yellow rounded-4 shadow-lg" >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Ver tus tramites</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>
      <div class="col">
        <a href="tramites.requisitos">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Como crear un tramite?</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div> </a>
        </div>
      </div>
      <div class="col">
        <a href="tramites.oficinas">
          <div class="card card-cover h-100 overflow-hidden text-white bg-yellow rounded-4 shadow-lg" >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Vista Administrador</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AKELIOS\cipservice\cippuno\resources\views/tramites/index.blade.php ENDPATH**/ ?>