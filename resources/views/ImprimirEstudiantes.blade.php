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
  left: 50mm;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  z-index: 1;
}

.credencial img.dots {
  position: absolute;
  top: 270mm;
  left: 63mm;
  width: 300px;
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
  top: 160mm;
  left: 0;
  font-size: 60px;
  font-family: Cambria;
}
#nombre-text {
  top: 180mm;
  left: 0;
  font-size: 60px;
  font-family: Cambria;
}
#ci-label {
  top: 200mm;
  left: -30mm;
}
#ci-text {
  top: 200mm;
  left: 30;
}
#grupo-label {
  top: 220mm;
  left: -40mm;
  font-size: 60px;
  font-family: Cambria;
}
#grupo-text {
  top: 220mm;
  left: 30mm;
  font-size: 60px;
  font-family: Cambria;
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
    <div class="text" id="nombre-label">{{ $estudiante->nombre }}</div>
    <div class="text" id="nombre-text">{{ $estudiante->apellido }}</div>
    <div class="label" id="ci-label">C.I:</div>
    <div class="text" id="ci-text">{{ $estudiante->cedula}}</div>
    <div class="label" id="grupo-label">GRUPO:</div>
    <div class="text" id="grupo-text">{{ $estudiante->grupo }}</div>
    <img src="{{ public_path('img/mensual.png') }}" class="dots">
  </div>
</body>

</html>