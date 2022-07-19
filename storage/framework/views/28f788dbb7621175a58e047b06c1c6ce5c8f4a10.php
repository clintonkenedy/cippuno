
<?php
   
            ?>


<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>DASHBOARD</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </div>




    <div class="panel panel-success"><br>
              <h2 class="panel-title"><center><font size="5"><i class='glyphicon glyphicon-user'></i>Datos del Usuario</font></center></h2>

            <div class="panel-body">
              <div class="row">



                <div class="col-md-3 col-lg-3 " align="center"> 
                    <div id="load_img">
                        <img class="img-responsive" src="<_?_php echo $row['logo_url'];?>" alt="Logo">
                        
                    </div>
                    
                    
				</div>

      

        <table id="caja" class="table table-striped mt-2">
            <thead>
            </thead>
            <tbody>
                <?php $__currentLoopData = $colegiados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colegiado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

    <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-condensed">
                    <tbody>
                      <tr>
                        <td class='col-md-3'>Nombres y Apellidos: </td>
                        <td><input type="text"  name="nombre_apellido" value="<?php echo e($colegiado->nombres); ?>"></td>
                      </tr>
                      <tr>
                        <td>Dni:</td>
                        <td><input type="text"  name="dni" value="<?php echo e($colegiado->dni); ?>" ></td>
                      </tr>


					  <tr>
                        <td>Ciudad:</td>
                        <td><input type="text"  name="ciudad" value="<?php echo e($colegiado->direccion); ?>"></td>
                      </tr>       
                     
                    </tbody>
                  </table>
                  
                  
                </div>
				<div class='col-md-12' id="resultados_ajax"></div><!-- Carga los datos ajax -->
              </div>
            </div>

            
          </div>
        </div>
		</form>
      </div>
      <table id="caja" class="table table-striped mt-2">
            <thead>
                <th>Id</th>
                <th>asunto</th>
                <th>fecha emision</th>
                <th>fecha recepcion</th>
                <th>Tipo de tramite</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tramites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tramite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($tramite->id); ?></td>
                    <td><?php echo e($tramite->asunto); ?></td>
                    <td><?php echo e($tramite->fecha_emi); ?></td>
                    <td><?php echo e($tramite->fecha_recep); ?></td>
                    <td><?php echo e($tramite->tipo_tramite_id); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AKELIOS\cipservice\cippuno\resources\views/tramites/mostrar.blade.php ENDPATH**/ ?>