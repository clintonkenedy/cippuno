

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h5 class="card-title text-center">NUEVO TRAMITE</h5>


<div>"" </div>

<form action="<?php echo e(route('tramites.store')); ?>" method="POST"  >
  <?php echo csrf_field(); ?>
  <label for="">Tipo de tramite</label>
  <input id="tipo_tramite_id" type="number"name="tipo_tramite_id" placeholder="tipo de tramite"><br>
  <label for="">Asunto</label>
  <input id="asunto" class="form-label" name="asunto" placeholder="asunto"><br>
  <label for="">Fecha Emision</label>
  <input id="fecha_emi" type="date" name="fecha_emi" placeholder="Fecha Emision"><br>
  <label for="">Fecha Recepcion</label>
  <input id="fecha_recep" type="date" name="fecha_recep" placeholder="Fecha Recepcion"><br>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AKELIOS\cipservice\cippuno\resources\views/tramites/creartrami.blade.php ENDPATH**/ ?>