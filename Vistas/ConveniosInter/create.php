<?php
include '../../functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $detalle = isset($_POST['detalle']) ? $_POST['detalle'] : '';
    $publico = isset($_POST['publico']) ? $_POST['publico'] : '';
    $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
    $universidad = isset($_POST['universidad']) ? $_POST['universidad'] : '';
    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
    $duracion = isset($_POST['duracion']) ? $_POST['duracion'] : '';
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO convenios_nacs VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $detalle, $publico, $ciudad, $universidad, $tipo, $duracion]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<div class="content update">
    <h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="detalle">Detalle</label>
        <input type="text" name="id" placeholder="Id" value="id" id="id">
        <input type="text" name="detalle" placeholder="detalle" id="detalle">

        <label for="publico">Publico</label>
        <label for="ciudad">Ciudad</label>
        <input type="text" name="publico" placeholder="publico" id="publico">
        <select name="ciudad" id="ciudad">
            <?php
            $sql = "SELECT id, nombre FROM ciudad";
            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute();
            $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
            foreach ($row as $row) {
            ?>
                <option value="<?php print($row->id) ?>"> <?php print($row->nombre) ?> </option>
            <?php
            } ?>
            <option value="">AMARILLO</option>
        </select>
        <!-- <input type="text" name="ciudad" placeholder="ciudad" id="ciudad"> -->

        <label for="universidad">Universidad</label>
        <label for="tipo">Tipo</label>
        <input type="text" name="universidad" placeholder="universidad" id="universidad">
        <input type="text" name="tipo" placeholder="tipo" id="tipo">

        <label for="duracion">Duración</label>
        <input type="number" name="duracion" placeholder="duracion" id="duracion">


        <input type="submit" value="Create">
    </form>
    <?php if ($msg) : ?>
        <p><?= $msg ?></p>
    <?php endif; ?>
</div>

