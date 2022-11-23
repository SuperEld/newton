<style>
    <style>
        body {
            width: 100vw;
            height: 200vh;
            box-sizing: border-box;
            overflow-x: hidden;
            background-image: url({{asset("/img/mantenimiento/mtn2.png")}});
            background-size: contain;
            background-repeat: no-repeat;
        }

        .form-group {
            margin-top: 2em;
        }
        form label {
            text-transform: uppercase;
            font-weight: bold;
            color: #1f2224;
            user-select: none;
        }
        form input:active.form-control,
        form input:focus.form-control {
            border: 1px solid #F2801F;
            box-shadow: 0 0 4px #F2801F;
            cursor: pointer;
        }
        .btn,
        .btn.active.focus,
        .btn.active:focus,
        .btn.focus,
        .btn.focus:active,
        .btn:active:focus,
        .btn:focus{
            padding: 0.5em 2em;
            border-radius: 4px;
            box-shadow: none;
            outline: 0;
        }
        .btn.btn-primary {
            background-color: #F2801F;
            border: 1px solid #F2801F;
            box-shadow: 0 0 4px #F2801F;
            outline: 0;
        }
        a.update {
            display: block;
            float: left;
        }
        form.delete {
            display: block;
            float: right;
        }

        .img-equipo {
            width: 150px;
            height: 150px;
        }
        .titulo {
            display: block;
            box-sizing: border-box;
            font-weight: lighter;
            padding: 0.5em 0;
            border-bottom: 1px solid ;
            margin-bottom: 1em;
        }
        .card {
            box-sizing: border-box;
            background-color: white;
            margin-bottom: 2em;
        }
        .card-body {
            padding: 1.2em 0;
        }
        .card-footer {
            box-sizing: border-box;
            background-color: #efefef;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .card-footer a {
            display: inline-block;
            padding: 0.5em 1em;
            width: 100%;
            color: #707070;
            font-size: 2em;
            transition: all 0.2s ease-in;
            cursor: pointer;
        }
        .card-footer a:hover {
            background-color: #037689;
        }
        .card-footer a span {
            text-align: center;
        }
        .equipos {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding: 0;
        }
        .equipos .card {
            width: 30%;
            display: inline-block;
        }
        @media all and (max-width: 768px) {
            .equipos .card {
                width: 49%;
            }
        }

        @media all and (max-width: 425px) {
            .equipos .card {
                width: 100%;
            }
        }
        
    </style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/nt.ico')}}" />
    <title>ISAAC NEWTON</title>
  
</head>
<nav class="navbar navbar-dark bg-primary ">
            <a href="#" class="navbar-brand">ISSAC NEWTON</a>
            </nav>
<body>


<div class="container">
    <h1 class="titulo">LISTADO DE EQUIPOS DE MANTENIMIENTO </h1>
    <div class="equipos">
        @foreach($estudiantes as $estudiante)
            <div class="card text-center">
                <div class="card-body">
                    <img style="height: 150px; width: 150px; background-color: #EFEFEF; margin: 10px " class="card-img-top rounded-circle mx-auto d-block"
                         src="estudiantes/{{$estudiante['fotografia']}}">
                    <p class="card-title">APELLIDO: {{ $estudiante['apellido'] }}</p>
                    <p class="card-title">NOMBRE: {{ $estudiante['nombre'] }}</p>
                    <p class="card-text">C.I.: {{ $estudiante['cedula'] }}</p>
                    <p class="card-text">GRUPO: {{ $estudiante['grupo'] }}</p>
                </div>
                <div class="card-footer">
                    <a href="" title="EDITAR" target="_blank">
                        <span class="glyphicon glyphicon-pencil-black"></span>
                    </a>
                    <a href="{{url('ImprimirEstudiante/' . $estudiante['id'])}}" title="IMPRIMIR" class="glyphicon btn btn-primary btn-sm"></a>
                </div>
            </div>
        @endforeach

    </div>
</div>   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>