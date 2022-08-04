<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 PDF</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    *{margin: 0px;
    padding: 0px;
}
    body{
        background-image:url('https://i.postimg.cc/YqrC7kt7/certificadocip.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
}

</style>
<body>
    <div class="container mt-5 text-center">
        <div class="row">
            <div class="col">
                <h2>COLEGIO DE INGENIEROS PUNO</h2>
                <br>
                <h1>CERTIFICADO</h1>
                <br>
            </div>
            <div class="col display-5 mt-5">
                <h4 class="mb-1">
                    Otorgado a: {{$colegiado->nombres}} {{$colegiado->a_paterno}} {{$colegiado->a_materno}}
                </h4>
                <br>
                <h4>
                    Por haber participado en calidad de @if($matricula->rol==0) Participante @else ponente @endif
                </h4>
                <br>
                <p class="text-left mt-5">
                    En el curso <span class="font-weight-bold text-uppercas">{{$curso->nombre}}</span>,
                    organizado por el Colegio de Ingenieros, llevado a cabo desde {{$curso->fecha_inicio}} hasta {{$curso->fecha_fin}}, con una duración de {{$curso->duracion}} días.
                </p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
