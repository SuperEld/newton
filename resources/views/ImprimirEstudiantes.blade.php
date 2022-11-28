<style>
*{
  margin: 0;
  padding: 0;
}
.credencial {
  width: 216mm;
  height: 279mm;
}

.credencial img.background {
  width: 100%;
  height: 100%;
  z-index: 0;
}

.credencial img.picture {
  position: absolute;
  top: 250px;
  left: 75mm;
  width: 250px;
  height: 250px;
  border-radius: 50%;
  z-index: 1;
}

.credencial img.dots {
  position: absolute;
  top: 250mm;
  left: 40mm;
  width: 500px;
  height: 150px;
  z-index: 1;
}

.label, .text {
  position: absolute;
  text-align: center;
  font-size: 40px;
  font-family: Cambria;
  font-weight: bold;
  text-transform: uppercase;
  padding: 48px 0;
  box-sizing: border-box;
  width: 100%;
}

.label {
  color: #0000FF;
}

#nombre-label {
  top: 135mm;
  left: 0;
}
#nombre-text {
  top: 150mm;
  left: 0;
}
#ci-label {
  top: 180mm;
  left: 0;
}
#ci-text {
  top: 195mm;
  left: 0;
}
#grupo-label {
  top: 210mm;
  left: 0;
}
#grupo-text {
  top: 225mm;
  left: 0;
}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/nt.ico')}}" />
    <title>IMPRIMIR</title>
</head>

<body>
  <div class="credencial">
    <img src="{{ public_path('img/fondo.png') }}" class="background">
    <img src="{{ storage_path('app/public/estudiantes/' . $estudiante->fotografia) }}" class="picture">
    <div class="label" id="nombre-label">NOMBRE:</div>
    <div class="text" id="nombre-text">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</div>
    <div class="label" id="ci-label">C.I:</div>
    <div class="text" id="ci-text">{{ $estudiante->cedula}}</div>
    <div class="label" id="grupo-label">GRUPO:</div>
    <div class="text" id="grupo-text">{{ $estudiante->grupo }}</div>
    <img src="{{ public_path('img/mensual.png') }}" class="dots">
  </div>
</body>

</html>