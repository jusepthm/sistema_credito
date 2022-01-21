<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Motos a credito</title>
</head>
<body>
	
<div class="form-control">
<form action="ctrmoto.php" id="form1">
	<h1>Formulario</h1>
  <div class="form-control">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="Nombre" placeholder="Ingrese el nombre">
  </div>
  <div class="form-control">
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" id="apellido" placeholder="Ingrese el apellido">
  </div>
   <div class="form-control">
    <label for="edad">Edad</label>
    <input type="number" class="form-control" id="edad" placeholder="Ingrese la edad">
  </div>
 <br>
  <select name="moto" class="custom-select">
  <option selected>Seleccione la moto de su preferencia</option>
  <option value="1">Eco Deluxe</option>
  <option value="2">Boxer</option>
  <option value="3">Cb 110</option>
  <option value="4">XR 150L</option>
</select>
<br>
  <div class="form-control">
    <label for="cuota">Numero de cuotas a financiar</label>
    <input type="number" class="form-control" id="cuota" placeholder="Ingrese la cuota">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>


</body>
</html>