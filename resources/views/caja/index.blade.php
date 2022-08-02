@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<script>
    const conceptos = @json($conceptos);
    // console.log(oficinas);
    // console.log(eventos);
    </script>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>CAJA CIP PUNO</h1>
        </div>
        <div class="row justify-content-end">
            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#staticBackdrop">Nueva Pago</button>
        </div>
        <div class="table-responsive-md">
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
                    @foreach ($pagos as $pago)
                    <tr>
                        <td>{{ $pago->id }}</td>
                        <td>{{ $pago->numero }}</td>
                        <td>{{ $pago->sede->nombre  }}</td>
                        <td>{{ $pago->forma_pago->nombre  }}</td>
                        @if ($pago->persona_id)
                            <td> <span class="badge bg-warning">Persona Natural</span></td>
                        @else
                        <td> <span class="badge bg-danger">Colegiado</span></td>
                        @endif
                        <td>{{ $pago->persona->nombres ?? $pago->colegiado->nombres ?? 'No Existe registro'}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">NUEVO PAGO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{route('caja.store')}}" id="crearPago" name="crearPago" class=""  url="javascript:void(0)" method="POST">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="dni">
                            DNI
                        <span style="color: red;">*</span>
                        </label>
                        <div class="input-group">
                            {{-- <form action=" {{ route("colegiado.buscar", '64694794') }} " method="get"> --}}
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
                        {{-- {!! Form::text('evento',null,array('id'=>'evento', 'class'=>'form-control '.($errors->has('evento') ? 'is-invalid':''), 'onkeyup'=>'validarEvento()','onblur'=>'validarEvento()')) !!} --}}
                        <input type="text" name="apaterno" id="apaterno" class="form-control" readonly>
                        {{-- @error('evento')
                    <span class="invalid-feedback">
                        <strong> {{$message}} </strong>
                    </span>
                    @enderror --}}
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
                        {{-- @error('evento')
                    <span class="invalid-feedback">
                        <strong> {{$message}} </strong>
                    </span>
                    @enderror --}}
                        <div id="errorEvento" class=""></div>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="form-label">
                            Concepto de Pago:
                            <span style="color: red;">*</span>
                        </label>
                        <div class="row" id="divpagos">
                            <div class="col-9 input-group" id="divconceptos1" onchange="cambioPago(this)">
                                <select class="col-9 custom-select mb-2" name="concepto[]">
                                    <option value="-1" selected>Selección concepto de pago</option>
                                    @foreach ($conceptos as $concepto)
                                    <option value="{{$concepto->id}}">{{$concepto->nombre}}</option>
                                    @endforeach
                                </select>
                                <input type="text" class="col-2 form-control" readonly>
                                <button type="button" class="col-1 close form-control" aria-label="Close" onclick="prueba(this)">
                                    <span aria-hidden="true" class="text-danger">&times;</span>
                                </button>
                            </div>
                            <div class="col">
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
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript">
        // const dni = document.getElementById("dni").value;
        const cambioPago = (concepto) => {
            const sel = concepto.getElementsByTagName('select');
            const idconcepto = sel.item(0).value;
            const precio = concepto.getElementsByTagName('input');
            // // console.log(precio.item(0));
            // // const precio = document.getElementById("precioconcepto");
            // console.log(sel.item(0).value);
            console.log(idconcepto);
            if (idconcepto != -1) {
                precio.item(0).value = conceptos.filter( x => x.id == idconcepto).map( x => x.precio);
            }
            else{
                precio.item(0).value = '...'
            }

        }
        const buscar = async ( dni ) => {
            event.preventDefault();
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

        const prueba = (concepto) => {
            concepto.parentNode.remove();
            console.log(concepto.parentNode);
        };

        var i = 2 //CONTADOR
        const addConcepto = () => {
            const div = document.getElementById("divconceptos1");
            const clon = div.cloneNode(true);
            clon.setAttribute('id', 'divconceptos'+i)
            const sel = clon.getElementsByTagName("select").item(0);
            sel.setAttribute('name','concepto[]');
            const inp = clon.getElementsByTagName("input").item(0);
            inp.value = '';
            // console.log(inp);
            const divconcepto = document.getElementById("divpagos");
            // const aux = concepto;
            // console.log(divconcepto);
            // console.log(divconcepto);
            // console.log(clon.getElementsByTagName('input'));

            divconcepto.appendChild(clon);
            i++;
        }

        const enviarData = async () => {
            event.preventDefault();
            const formpagos = document.forms.crearPago;
            const formData = new FormData(formpagos);
            // console.log(formData.get('apaterno'));
            console.log(formData.apaterno);
            // for (const value of formData.values()) {
            //     console.log(value);
            // }
        }

        $(document).ready( function () {
            $('#caja').DataTable();
        } );
    </script>
@stop




