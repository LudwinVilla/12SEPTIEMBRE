<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a87f2bfe07.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a87f2bfe07.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"><script src="https://kit.fontawesome.com/a87f2bfe07.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="container">
    <p>
         <center> <h2>INGRESE SUS DATOS AQUI</h2></center>
    </p>
    <center><div class="contenedor">
    <form action="EstudianteController.php" method="post">
   
    <p>
         <div class="col-4">
        <label for="apellidos">Nombre</label> 
        <input type="text" class="form-control" name="apellidos" placeholder="Ingresa tu nombre">
        </p>
    </div>

        
         <p>
        <div class="col-4">
        <label for="nombre">Apellidos </label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingresa tus Apellidos">
        </p>
        </div>

        <p>
            <div class="col-4">
            <label for="direccion">Email</label>
            <input type="text" class="form-control" name="direccion" placeholder="Ingresa tu Direccion Email">
        </p>
        </div>
        
          <p>
            <div class="col-4">
            <label for="telefono">Telefono</label>
            <input type="number" class="form-control" name="telefono" placeholder="Ingresa tu Telefono">
        </p>
        </div>
        
        
           <p>
            <input type="submit" value="Enviar Datos">
        </p>
        </div>     
        </center>  
        </div>  
</body>
</html>