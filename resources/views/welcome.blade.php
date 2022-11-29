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
                    <!--<a class="" href="ListaEstudiantes">LISTADO</a>-->
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</div>


<div class="container" id="sha" >
    <div class="row">
        <div class="col-xs-12" >
            <img src="img/logo.png" width="200"  class="img-responsive" id="avatar">
        </div>
    </div>
    <form class="form-group" method="POST" action="guardar-estudiante" enctype="multipart/form-data">
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
                                <option>NOR - 1</option>
                                <option>NOR - 2</option>
                                <option>NOR - 3</option>
                                <option>NOR - 4</option>
                                <option>NOR - 5</option>
                                <option>NOR - 6</option>
                                <option>NOR - 7</option>
                                <option>NOR - 8</option>
                                <option>NOR - 9</option>
                                <option>NOR - 10</option>
                                <option>NOR - 11</option>
                                <option>NOR - 12</option>
                                <option>NOR - 13</option>
                                <option>NOR - 14</option>
                                <option>NOR - 15</option>
                                <option>TEC - 1</option>
                                <option>TEC - 2</option>
                                <option>TEC - 3</option>
                                <option>TEC - 4</option>
                                <option>TEC - 5</option>
                                <option>TEC - 6</option>
                                <option>TEC - 7</option>
                                <option>TEC - 8</option>
                                <option>TEC - 9</option>
                                <option>TEC - 10</option>
                                <option>TEC - 11</option>
                                <option>TEC - 12</option>
                                <option>TEC - 13</option>
                                <option>TEC - 14</option>
                                <option>TEC - 15</option>
                                <option>ECO - 1</option>
                                <option>ECO - 2</option>
                                <option>ECO - 3</option>
                                <option>ECO - 4</option>
                                <option>ECO - 5</option>
                                <option>ECO - 6</option>
                                <option>ECO - 7</option>
                                <option>ECO - 8</option>
                                <option>ECO - 9</option>
                                <option>ECO - 10</option>
                                <option>ECO - 11</option>
                                <option>ECO - 12</option>
                                <option>ECO - 13</option>
                                <option>ECO - 14</option>
                                <option>ECO - 15</option>
                                <option>ARQ - 1</option>
                                <option>ARQ - 2</option>
                                <option>ARQ - 3</option>
                                <option>ARQ - 4</option>
                                <option>ARQ - 5</option>
                                <option>ARQ - 6</option>
                                <option>ARQ - 7</option>
                                <option>ARQ - 8</option>
                                <option>ARQ - 9</option>
                                <option>ARQ - 10</option>
                                <option>ARQ - 11</option>
                                <option>ARQ - 12</option>
                                <option>ARQ - 13</option>
                                <option>ARQ - 14</option>
                                <option>ARQ - 15</option>
                                <option>DER - 1</option>
                                <option>DER - 2</option>
                                <option>DER - 3</option>
                                <option>DER - 4</option>
                                <option>DER - 5</option>
                                <option>DER - 6</option>
                                <option>DER - 7</option>
                                <option>DER - 8</option>
                                <option>DER - 9</option>
                                <option>DER - 10</option>
                                <option>DER - 11</option>
                                <option>DER - 12</option>
                                <option>DER - 13</option>
                                <option>DER - 14</option>
                                <option>DER - 15</option>
                                <option>HUM - 1</option>
                                <option>HUM - 2</option>
                                <option>HUM - 3</option>
                                <option>HUM - 4</option>
                                <option>HUM - 5</option>
                                <option>HUM - 6</option>
                                <option>HUM - 7</option>
                                <option>HUM - 8</option>
                                <option>HUM - 9</option>
                                <option>HUM - 10</option>
                                <option>HUM - 11</option>
                                <option>HUM - 12</option>
                                <option>HUM - 13</option>
                                <option>HUM - 14</option>
                                <option>HUM - 15</option>
                                <option>MED - 1</option>
                                <option>MED - 2</option>
                                <option>MED - 3</option>
                                <option>MED - 4</option>
                                <option>MED - 5</option>
                                <option>MED - 6</option>
                                <option>MED - 7</option>
                                <option>MED - 8</option>
                                <option>MED - 9</option>
                                <option>MED - 10</option>
                                <option>MED - 11</option>
                                <option>MED - 12</option>
                                <option>MED - 13</option>
                                <option>MED - 14</option>
                                <option>MED - 15</option>
                                <option>ENF - 1</option>
                                <option>ENF - 2</option>
                                <option>ENF - 3</option>
                                <option>ENF - 4</option>
                                <option>ENF - 5</option>
                                <option>ENF - 6</option>
                                <option>ENF - 7</option>
                                <option>ENF - 8</option>
                                <option>ENF - 9</option>
                                <option>ENF - 10</option>
                                <option>ENF - 11</option>
                                <option>ENF - 12</option>
                                <option>ENF - 13</option>
                                <option>ENF - 14</option>
                                <option>ENF - 15</option>
                                <option>BIO - 1</option>
                                <option>BIO - 2</option>
                                <option>BIO - 3</option>
                                <option>BIO - 4</option>
                                <option>BIO - 5</option>
                                <option>BIO - 6</option>
                                <option>BIO - 7</option>
                                <option>BIO - 8</option>
                                <option>BIO - 9</option>
                                <option>BIO - 10</option>
                                <option>BIO - 11</option>
                                <option>BIO - 12</option>
                                <option>BIO - 13</option>
                                <option>BIO - 14</option>
                                <option>BIO - 15</option>
                                <option>ODONT - 1</option>
                                <option>ODONT - 2</option>
                                <option>ODONT - 3</option>
                                <option>ODONT - 4</option>
                                <option>ODONT - 5</option>
                                <option>ODONT - 6</option>
                                <option>ODONT - 7</option>
                                <option>ODONT - 8</option>
                                <option>ODONT - 9</option>
                                <option>ODONT - 10</option>
                                <option>ODONT - 11</option>
                                <option>ODONT - 12</option>
                                <option>ODONT - 13</option>
                                <option>ODONT - 14</option>
                                <option>ODONT - 15</option>
                                <option>FISIO - 1</option>
                                <option>FISIO - 2</option>
                                <option>FISIO - 3</option>
                                <option>FISIO - 4</option>
                                <option>FISIO - 5</option>
                                <option>FISIO - 6</option>
                                <option>FISIO - 7</option>
                                <option>FISIO - 8</option>
                                <option>FISIO - 9</option>
                                <option>FISIO - 10</option>
                                <option>FISIO - 11</option>
                                <option>FISIO - 12</option>
                                <option>FISIO - 13</option>
                                <option>FISIO - 14</option>
                                <option>FISIO - 15</option>


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