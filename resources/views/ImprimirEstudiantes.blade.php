<style>
.credencial{
  color: #00b4e1;
  font-family: 'Source Sans Pro';
  width: 15cm;
  height: 24cm;
  position: relative;
  border-radius: 10px;
  overflow: hidden;
  z-index: 0;
  
}

body {
        width: 13cm;
        height: 21cmh;
        box-sizing: border-box;
        overflow-x: hidden;
        background-image: url({{asset("img/fondo.png")}});
        background-size: contain;
        background-repeat: no-repeat;
    }

.heading .logo, .heading .subtitle, .foto, img, .datos{
  position: absolute;
}

.heading .logo {
  letter-spacing: -0.4mm;
  top: -0.7cm;
  left: 0.6cm;
  font-size: 1cm;
}

.datos, .heading .subtitle{
  list-style: none;
}

.datos{
  color: #054AA6;
  bottom: 0.2cm;
  font-family: cursive;
  font-size: 0.60cm;
  font-weight: 600;
  left: 2cm;
  top: 13cm;
  letter-spacing: 0.7mm
  
}

.heading .subtitle{
  font-size: 2.6mm;
  left: 2cm;
  line-height: 3mm;
  font-weight: 600;
  color: #009cc3;
  
}

img{
  
       
   top: 50%;      
   transform: translate(-25.5%, -32.2%) scale(0.6);
  z-index: -1;
}



.foto{
  right: 0.2mm;
  left: 3.5cm;
  top: -6cm;
  background-color: white;
}

.p1{
  color: #050404;
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
    <title>IMPRIMIR</title>
</head>

<body>

<div class="credencial">
  <div class="body">
  <div class="datos text-center">

                <div class="">
                    <img style="height: 400px; width: 400px; background-color: #EFEFEF; margin: 10px; border-width: thick; border-color: black " class=" foto card-img-top rounded-circle mx-auto d-block"
                         src="">
                    <p class="">NOMBRE: </p>
                    <p class="p1"> </p>
                    <p class="">C.I.:</p>
                    <p class="p1">}</p>
                    <p class="">GRUPO: </p>
                    <p class="p1"></p>
                </div>  
  
  </div>
  <img style="height: 100px;   margin: 10px; top:22cm; left:4.5cm" src="/img/mensual.png" >
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>