<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - Home</title>
</head>
<body>
    <h1 class="text-center">Crud x2</h1>
    <table class="table table-dark table-striped">
        <!-- Se ingresa el controlador 'insertarController.php' -->
        <a href="../controladores/insertarController.php"><button>Incluir</button></a>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">ACCION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach((array) $records as $record){?> <!--El foreach hace lo siguiente: tome a $records COMO $record -->
            <tr>
                <th scope="row"><?php echo $record['id']?></th>
                <td><?php echo $record['nombre']?></td>
                <td><?php echo $record['apellido']?></td>
                <td>
                    <a href="#"><button>Editar</button></a>
                    <a href="#"><button>Eliminar</button></a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    
</body>
</html>
