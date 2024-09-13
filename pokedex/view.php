<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel= "stylesheet" href="assets/main.css">
</head>
<body>
<!--http://localhost/bienvenido/pokedex/view.php-->

<div id="contenedor_principal" class="container-fluid">


<div class="row">

<section class="col-8" id="tabla"> aqui va la tabla </section>

<section class="col-4" id="formulario">

<form>

<h3>Agrega un pushimon</h3>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">

  </div>

  <div class="mb-3">
    <label for="tipo" class="form-label">Tipo</label>
    <select class="form-select" name="tipo" id="tipo">
     <option value="normal">Normal</option>
     <option value="fuego">Fuego</option>
    <option value="agua">Agua</option>
    <option value="tierra">Tierra</option>
    <option value="aire">Aire</option>
    <option value="electrico">Electrico</option>

</select>

  </div>
  <div class="mb-3">
    <label for="fuerza" class="form-label">Fuerza</label>
    <input type="number" class="form-control" id="fuerza" name="fuerza">

  </div>
  <div class="mb-3">
    <label for="dueno" class="form-label">Dueño</label>
    <input type="text" class="form-control" id="dueno" name="dueno">

  </div>
  <div class="mb-3">
    <label for="habilidad" class="form-label">Habilidad</label>
    <input type="text" class="form-control" id="habilidad" name="habilidad">

  </div>
  <div class="mb-3">
    <label for="region" class="form-label">Region</label>
    <input type="text" class="form-control" id="region" name="region">

  </div>
  <div class="mb-3">
    <label for="evolucion" class="form-label">Evolucion</label>
    <input type="text" class="form-control" id="evolucion" name="evolucion">

  </div>
  <div class="mb-3">
    <label for="prevolucion" class="form-label">Prevolucion</label>
    <input type="text" class="form-control" id="prevolucion" name="prevolucion">

  </div>


  <button type="submit" class="btn btn-primary">Submit</button>

  <br>
  <br>
</form>




</section>

</div><!-- fin row -->
</div><!-- fin container -->





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="assets/main.js">  </script>
</body>

</body>
</html>