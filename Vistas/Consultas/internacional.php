<?php include 'index.php';?>
<style>
<?php
include_once ('style.css');
?>
</style>
<?php
// Connect to MySQL database
$pdo = pdo_connect_mysql();

$stmt = $pdo->prepare('SELECT * FROM convenios_inters ORDER BY id');
$stmt->execute();
$connacs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="content read">
      <h2>Read Convenios</h2>
      <table>
            <thead>
                  <tr>
                        <td>#</td>
                        <th>País</th>
                        <th>Universidad</th>
                        <th>Programa</th>
                        <th>Publico</th>
                        <th>Tipo</th>
                        <td></td>
                  </tr>
            </thead>
            <tbody>
                  <?php foreach ($connacs as $connac) : ?>
                        <tr>
                              <a href="href="delete.php?id=<?= $connac['id'] ?>><td><?= $connac['id'] ?></td></a>
                              <td><?= $connac['pais'] ?></td>
                              <td><?= $connac['universidad'] ?></td>
                              <td><?= $connac['programa'] ?></td>
                              <td><?= $connac['publico'] ?></td>
                              <td><?= $connac['tipo'] ?></td>
                        </tr>
                  <?php endforeach; ?>
            </tbody>
      </table>
</div>

