<?php include 'index.php';?>
<style>
<?php
include_once ('style.css');
?>
</style>

<?php
// Connect to MySQL database
$pdo = pdo_connect_mysql();

// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM convenios_nacs ORDER BY id');
$stmt->execute();
// Fetch the records so we can display them in our template.
$connacs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="content read">
      <h2>Read Convenios</h2>
      <table>
            <thead>
                  <tr>
                        <td>#</td>
                        <th>Detalle</th>
                        <th>Público</th>
                        <th>Ciudad</th>
                        <th>Universidad</th>
                        <th>Tipo</th>
                        <th>Duración</th>
                        <td></td>
                  </tr>
            </thead>
            <tbody>
                  <?php foreach ($connacs as $connac) : ?>
                        <tr>
                              <a href="href="delete.php?id=<?= $connac['id'] ?>><td><?= $connac['id'] ?></td></a>
                              <td><?= $connac['detalle'] ?></td>
                              <td><?= $connac['publico'] ?></td>
                              <td><?= $connac['ciudad'] ?></td>
                              <td><?= $connac['universidad'] ?></td>
                              <td><?= $connac['tipo'] ?></td>
                              <td><?= $connac['duracion'] ?></td>
                              <td class="actions">
                                    <a href="" class="btn btn-success">Aplicar</a>
                        
                        </tr>
                  <?php endforeach; ?>
            </tbody>
      </table>
     
</div>

