

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DASHBOARD</h1>
@stop

@section('content')
<div class="container">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </div>


            <div class="container">
            
            <img src= "C:\Users\Renato\Documents\larabel\cippuno\resources\views\tramites\fet.jpeg" alt ="..." />
                            <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Codigo</label>
                            <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                            <div class="valid-feedback">
                            Looks good!
                            
                        </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                            Please provide a valid city.
                            </div>
                        </div>

                        </form>
            </div>
    
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



    <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-condensed">
                    <tbody>
                      <tr>value="<_?_php echo $row['ocupacion']?>
                        <td class='col-md-3'>Nombres y Apellidos:</td>
                        <td><input type="text"  name="nombre_apellido" value={{ auth()->user()->name }} ></td>
                      </tr>
                      <tr>
                        <td>Ocupación:</td>
                        <td><input type="text"  name="ocupacion" value="<_?_php echo $row['ocupacion']?>" required></td>
                      </tr>
                      <tr>
                        <td>Correo electrónico:</td>
                        <td><input type="email"  name="correo" value={{ auth()->user()->email }} ></td>
                      </tr>
					  <tr>
                        <td>Telefono:</td>
                        <td><input type="text"  required name="migration" value=""></td>
                      </tr>
					  <tr>
                        <td>Ciudad:</td>
                        <td><input type="text"  name="ciudad" value="<_?_php echo $row['ciudad'];?>" required></td>
                      </tr>       
                     
                    </tbody>
                  </table>
                  
                  
                </div>
				<div class='col-md-12' id="resultados_ajax"></div><!-- Carga los datos ajax -->
              </div>
            </div>
                 <div class="panel-footer text-center">
                    
                     
                <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-refresh"></i> Actualizar hoja de vida</button>

                       
                       
                    </div>
            
          </div>
        </div>
		</form>
      </div>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




