<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - Home</title>
</head>
<body>
    <h1 class="text-center">Insertar personas</h1>
    <!--Aquí enlazamos el controlador para que la información se envíe a ese mismo controlador -->
    <form action="../controladores/insertarController.php" method="POST"> 
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
        </div>
        <div class="form-group">
            <label for="nombre">apellido</label>
            <input type="text" name="apellido" placeholder="Ingrese su apellido" required>
        </div>

        <input type="submit" value="Enviar datos">

    </form>

    
    
</body>
</html>
