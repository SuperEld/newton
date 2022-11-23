<style>
    body {
        width: 100vw;
        height: 150vh;
        box-sizing: border-box;
        overflow-x: hidden;
        background-image: url({{asset("img/mtn1.png")}});
        background-size: contain;
        background-repeat: no-repeat;
    }
.card { 
        background-color: white;
        margin: 8em auto 4em auto;
        padding: 1em 2em;
        box-sizing: border-box;
        border-radius: 4px;
        box-shadow: 0 0 5px ;
    }
    .card .card-header {
        box-sizing: border-box;
        padding-bottom: 1em;
        border-bottom: 1px solid ;
    }
    .card .card-body {
        padding-bottom: 1em;
    }
    .form-group {
        margin-top: 2em;
    }
    form label {
        text-transform: uppercase;
        font-weight: bold;
        color: ;
        user-select: none;
    }
    form input:active.form-control,
    form input:focus.form-control {
        border: 1px solid ;
        box-shadow: 0 0 4px ;
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
        background-color: ;
        border: 1px solid ;
        box-shadow: 0 0 4px ;
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
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/nt.ico')}}" />
    <title>ISAAC NEWTON</title>
</head>

<body>
@if(isset($mensaje) and ($mensaje!=""))
    <div class="alert alert-success">
        {{$mensaje}}
    </div>
@endif
<div>
                <li>
                    <a class="" href="ListaEstudiantes">LISTADO</a>
                </li>
</div>


<div class="container" id="sha" >
    <div class="row">
        <div class="col-xs-12" >
            <img src="img/logo.png" width="200"  class="img-responsive" id="avatar">
        </div>
    </div>
    <form class="form-group" method="POST" action="/guardar-estudiante" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-4 form-group">
            <label for="Apellidos"></label>
            <label >apellidos</label>
            <input id="apellido" type="text" class="form-control" placeholder="Apellidos" name="apellido" value="">
        </div>
        <div class="col-lg-4 form-group">
        <label >nombres</label>
        <input id="nombre" type="text" class="form-control" placeholder="Nombres" name="nombre" value="">
        </div>

        <div class="col-lg-4 form-group">
        <label >numero de carnet de identidad</label>
        <input id="cedula" type="text" class="form-control" placeholder="cedula" name="cedula" value="">
        </div>


        <div class="col-lg-4 form-group">
                            <label >grupo</label>
                            <select type="text" oninput="this.value = this.value.toUpperCase()" class="form-control" maxlength="2" id="grupo" name="grupo" >
                                <option>NORMAL - 1</option>
                                <option>NORMAL - 3</option>
                                <option>ENF - 5</option>
                                <option>ENF - 7</option>
                                <option>BIO - 4</option>
                                <option>ODT - 3</option>
                                <option>NORMAL - 2</option>
                                <option>NORMAL - 1</option>
                            </select>
        </div>
        
        <div class="col-lg-4 form-group">
                            <label for="fotografia">fotografia</label>
                            <input type="file" class="form-control" id="fotografia" name="fotografia" required>
                        </div>
        <br>
        <button type="submit" class="btn btn-small btn-primary btn-block">
            {{ __('REGISTRAR') }}
        </button>
		  
    </form>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>