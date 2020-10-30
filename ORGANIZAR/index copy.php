<?php
    include_once('Controladores/ConveniosNac.php');
    include_once('Controladores/ConveniosNacController.php');
    include_once('Modelos/ConveniosNac.php');

    $query=mysqli_query($mysqli, 'SELECT id, nombre FROM ciudad');

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Anexsoft</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
</head>

<body>

    <div class="pure-g">
        <div class="pure-u-1-12">

            <form action="?action=<?php echo $con->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked">
                <input type="number" name="id" value="<?php echo $con->__GET('id'); ?>" />

                <table>
                    <tr>
                        <th>Detalle</th>
                        <td><input type="text" name="detalle" value="<?php echo $con->__GET('detalle'); ?>" /></td>
                    </tr>
                    <tr>
                        <th>publico</th>
                        <td><input type="number" name="publico" value="<?php echo $con->__GET('publico'); ?>" /></td>
                    </tr>
                    <tr>
                        <th>ciudad</th>
                        <td><input type="number" name="ciudad" value="<?php echo $con->__GET('ciudad'); ?>" /></td>
                    </tr>

                    <tr>
                        <th>universidad</th>
                        <td><input type="number" name="universidad" value="<?php echo $con->__GET('universidad'); ?>" /></td>
                    </tr>
                    <tr>
                        <th>tipo</th>
                        <td><input type="text" name="tipo" value="<?php echo $con->__GET('tipo'); ?>" /></td>
                    </tr>
                    <tr>
                        <th>duracion</th>
                        <td><input type="duracion" name="duracion" value="<?php echo $con->__GET('duracion'); ?>" /></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                        </td>
                    </tr>
                </table>
            </form>

            <table class="pure-table pure-table-horizontal">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Detalle</th>
                        <th>publico</th>
                        <th>ciudad</th>
                        <th>universidad</th>
                        <th>tipo</th>
                        <th>duracion</th>

                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?php foreach ($controller->Listar() as $r) : ?>
                    <tr>
                        <td><?php echo $r->__GET('id'); ?></td>
                        <td><?php echo $r->__GET('detalle'); ?></td>
                        <td><?php echo $r->__GET('publico'); ?></td>
                        <td><?php echo $r->__GET('ciudad'); ?></td>
                        <td><?php echo $r->__GET('universidad'); ?></td>
                        <td><?php echo $r->__GET('tipo'); ?></td>
                        <td><?php echo $r->__GET('duracion'); ?></td>

                        <td>
                            <a href="?action=editar&id=<?php echo $r->id; ?>">Editar</a>
                        </td>
                        <td>
                            <a href="?action=eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>

</body>

</html>