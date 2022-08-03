

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <h1>CAJA CIP PUNO</h1>
        </div>
        <div class="row justify-content-end">
            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#staticBackdrop">Nueva Venta</button>
        </div>
        <table id="caja" class="table table-striped mt-2">
            <thead>
                <th>Id</th>
                <th>Numero</th>
                
                <th>Sede</th>
                <th>Forma de Pago</th>
                <th>Tipo de Persona</th>
                <th>Nombres</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pagos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pago): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pago->id); ?></td>
                    <td><?php echo e($pago->numero); ?></td>
                    
                    <td><?php echo e($pago->sede->nombre); ?></td>
                    <td><?php echo e($pago->forma_pago->nombre); ?></td>
                    <?php if($pago->persona_id): ?>
                        <td> <span class="badge bg-warning">Persona Natural</span></td>
                    <?php else: ?>
                    <td> <span class="badge bg-danger">Colegiado</span></td>
                    <?php endif; ?>
                    <td><?php echo e($pago->persona->nombres ?? $pago->colegiado->nombres ?? 'No Existe registro'); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>


        
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">NUEVO PAGO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('caja.store')); ?>" id="crearPago" name="crearPago" class=""  url="javascript:void(0)" method="POST">
                <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="dni">
                            DNI
                        <span style="color: red;">*</span>
                        </label>
                        <div class="input-group">
                            
                            <input type="text" class="form-control xd" placeholder="Ingrese DNI" aria-label="Ingrese DNI" id="dni">
                            <input type="text" name="dnia" id="dnia" class="form-control" hidden>
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="buscarDNI" onclick="buscar(dni)">Buscar</button>
                            </div>
                          </div>
                        <div id="messageEvento" style="color:salmon" hidden>
                            Ingrese caracteres validos.
                        </div>
                        <div id="noEncontrado" style="color:salmon" hidden>
                            Usuario no encontrado
                        </div>
                        <div id="errorEvento" class=""></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="apaterno" class="form-label">
                            Apellido Paterno:
                        <span style="color: red;">*</span>
                        </label>
                        
                        <input type="text" name="apaterno" id="apaterno" class="form-control" readonly>
                        
                        <div id="errorEvento" class=""></div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="amaterno" class="form-label">
                            Apellido Materno:
                        <span style="color: red;">*</span>
                        </label>
                        
                        <input type="text" name="amaterno" id="amaterno" class="form-control" readonly>
                        
                        <div id="errorEvento" class=""></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="nombres" class="form-label">
                            Nombres:
                        <span style="color: red;">*</span>
                        </label>
                        
                        <input type="text" name="nombres" id="nombres" class="form-control" readonly>
                        
                        <div id="errorEvento" class=""></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="evento" class="form-label">
                            Observaciones:
                        <span style="color: red;">*</span>
                        </label>
                        
                        
                        <textarea type="text" name="observaciones" id="observaciones" class="form-control" placeholder="Ingrese Observaciones"></textarea>
                        
                        <div id="errorEvento" class=""></div>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">
                            Concepto de Pago:
                            <span style="color: red;">*</span>
                        </label>
                        <div class="row">
                            <div class="col-10" id="divconceptos">
                                <select class="custom-select mb-2" name="concepto1" id="selectconcepto">
                                    <option selected>Seleccion concepto de pago</option>
                                    <?php $__currentLoopData = $conceptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $concepto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="1"><?php echo e($concepto->nombre); ?>     -   <?php echo e($concepto->precio); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>
                            <div class="col-2">
                                <button class="btn btn-warning float-right" type="button" onclick="addConcepto()">Agregar</button>
                            </div>
                        </div>

                    </div>
                </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
    <script type="text/javascript">
        // const dni = document.getElementById("dni").value;

        const buscar = async ( dni ) => {
            const apaterno = document.getElementById('apaterno');
            const amaterno = document.getElementById('amaterno');
            const nombres = document.getElementById('nombres');
            const dnia1 = document.getElementById('dnia');
            if (dni.value.toString().length != 8) return //VALIDACION SIMPLE PARA DNI

            const resp = await fetch(`/buscar/${dni.value}`); //BUSCA EN LA TABLA COLEGIADOS

            const {status, data} = await resp.json(); //DESESTRUCTURACION DE RESPUESTA

            if (status == 'ok') { //SI EXISTE COLEGIADO
                //IMPRESION DE VALORES EN INPUTS
                apaterno.value = data.a_paterno;
                amaterno.value = data.a_materno;
                nombres.value = data.nombres;
                dnia1.value = data.dni;
                //ESTILOS
                document.getElementById('noEncontrado').hidden = true;
                if(dni.classList.contains('is-invalid')){
                    dni.classList.replace('is-invalid','is-valid')
                }
                else{
                    dni.classList.add('is-valid');
                }

            }
            else {
                //IMPRESION DE VALORES EN INPUTS
                apaterno.value = '';
                amaterno.value = '';
                nombres.value = '';
                //ESTILOS
                document.getElementById('noEncontrado').hidden = false;
                if(dni.classList.contains('is-valid')){
                    dni.classList.replace('is-valid','is-invalid')
                }
                else{
                    dni.classList.add('is-invalid');
                }
            }
        };

        var i = 2 //CONTADOR
        const addConcepto = () => {
            // const concepto = document.createElement("select");
            // const clase = document.createAttribute("class");
            // clase.value = "custom-select";

            const concepto = document.getElementById("selectconcepto");
            const clon = concepto.cloneNode(true);
            clon.setAttribute('name','concepto'+i);
            const divconcepto = document.getElementById("divconceptos");
            // const aux = concepto;
            // console.log(divconcepto);
            divconcepto.appendChild(clon);
            i++;
        }

        $(document).ready( function () {
            $('#caja').DataTable();
        } );
    </script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AKELIOS\cipservice\cippuno\resources\views/caja/index.blade.php ENDPATH**/ ?>