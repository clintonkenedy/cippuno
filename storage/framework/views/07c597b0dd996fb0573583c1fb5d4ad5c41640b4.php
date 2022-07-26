<?php
   $DateAndTime = date('d-m-Y ');
   echo  $DateAndTime;

            ?>

<?php echo e(date('Y-m-d',time())); ?>



<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h5 class="card-title text-center">NUEVO TRAMITE</h5>


<div>"" </div>

<form action="<?php echo e(route('tramites.store')); ?>" method="POST"  >
  <?php echo csrf_field(); ?>
  <label for="floatingSelect">Tipo de Tramite</label>
  <div class="form-floating">
  <select class="form-select" id="tipo_tramite_id" name="tipo_tramite_id" aria-label="Floating label select example">
    <option selected>Opciones de Tramites</option>
    <option value="1">repellat</option>
    <option value="2">voluptate</option>
    <option value="3">ratione</option>
    <option value="4">esse</option>
    <option value="5">sunt</option>
  </select>
</div>

  <label for="">Id colegiado</label>
  <input id="tipo_tramite_id" type="number"name="colegiado_id" ><br>
  <label for="">Asunto</label>
  <textarea class="form-control" rows="3" name="asunto" placeholder="asunto" ></textarea>
  <label for="">Fecha Emision</label>
  <input id="fecha_emi" type="date" name="fecha_emi" placeholder="Fecha Emision" value="<?php echo e(date('d/m/Y')); ?>"><br>
  <label for="">Fecha Recepcion</label>
  <input id="fecha_recep" type="date" name="fecha_recep" placeholder="Fecha Recepcion"><br>
  <label for="formFile" class="form-label">Adjuntar Archivos Necesarios 1</label>
  <input class="form-control" type="file" name="archivo1" id="formFileMultiple" multiple>
  <label for="formFile" class="form-label">Adjuntar Archivos Necesarios 2</label>
  <input class="form-control" type="file" name="archivo2" id="formFileMultiple" multiple>
  <label for="formFile" class="form-label">Adjuntar Archivos Necesarios 3</label>
  <input class="form-control" type="file" name="archivo3" id="formFileMultiple" multiple>
  <label for="formFile" class="form-label">Adjuntar Archivos Necesarios 4</label>
  <input class="form-control" type="file" name="archivo4" id="formFileMultiple" multiple>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AKELIOS\cipservice\cippuno\resources\views/tramites/creartrami.blade.php ENDPATH**/ ?>