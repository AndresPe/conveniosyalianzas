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
$stmt = $pdo->prepare('SELECT * FROM intercambios ORDER BY id');
$stmt->execute();
// Fetch the records so we can display them in our template.
$connacs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="content read">
      <h2>Intercambios Académicos</h2>
      <table>
            <thead>
                  <tr>
                        <td>#</td>
                        <th>Detalle</th>
                        <th>País</th>
                        <th>Ciudad/Estado</th>
                        <th>Universidad</th>
                        <th>Programa</th>
                        <th>Duración</th>
                        <td></td>
                  </tr>
            </thead>
            <tbody>
                  <?php foreach ($connacs as $connac) : ?>
                        <tr>
                              <a href="href="delete.php?id=<?= $connac['id'] ?>><td><?= $connac['id'] ?></td></a>
                              <td><?= $connac['detalle'] ?></td>
                              <td><?= $connac['pais'] ?></td>
                              <td><?= $connac['ciudad'] ?></td>
                              <td><?= $connac['universidad'] ?></td>
                              <td><?= $connac['programa'] ?></td>
                              <td><?= $connac['duracion'] ?></td>
                        </tr>
                  <?php endforeach; ?>
            </tbody>
      </table>
      
</div>

