<?php
include 'index.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $detalle = isset($_POST['detalle']) ? $_POST['detalle'] : '';
        $publico = isset($_POST['publico']) ? $_POST['publico'] : '';
        $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';
        $universidad = isset($_POST['universidad']) ? $_POST['universidad'] : '';
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
        $duracion = isset($_POST['duracion']) ? $_POST['duracion'] : '';

        // Update the record
        $stmt = $pdo->prepare('UPDATE convenios_nacs SET id = ?, name = ?, detalle = ?, publico = ?, ciudad = ?, universidad = ?, tipo = ?, duraccion = ?   WHERE id = ?');
        $stmt->execute([$id, $detalle, $publico, $ciudad, $universidad, $tipo, $duracion, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM convenios_nacs WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $connac = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$connac) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>

<div class="content update">
	<h2>Update Contact #<?=$connac['id']?></h2>
    <form action="update.php?id=<?=$connac['id']?>" method="post">
        <label for="id">ID</label>
        <label for="name">Detalle</label>
        <input type="text" name="id" placeholder="id" value="<?=$connac['id']?>" id="id">
        <input type="text" name="detalle" placeholder="detalle" value="<?=$connac['detalle']?>" id="detalle">
        
        <label for="publico">Público</label>
        <label for="ciudad">Ciudad</label>
        <input type="text" name="publico" placeholder="publico" value="<?=$connac['publico']?>" id="publico" disabled>
        <input type="number" name="ciudad" placeholder="ciudad" value="<?=$connac['ciudad']?>" id="ciudad" disabled>

        <label for="universidad">Universidad</label>
        <label for="tipo">Tipo</label>
        <input type="text" name="universidad" placeholder="universidad" value="<?=$connac['universidad']?>" id="universidad" disabled>
        <input type="text" name="tipo" value="<?=$connac['tipo']?>" id="tipo">

        <label for="duracion">Duracion</label>
        <input type="text" name="duracion" placeholder="duracion" value="<?=$connac['duracion']?>" id="duracion">
        
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

