<style>
      <?php include '../../style.css'; include '../../index.php';
?>
</style>

<?php
// Connect to MySQL database
$pdo = pdo_connect_mysql();

// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM convenios_nacs ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->execute();
// Fetch the records so we can display them in our template.
$connacs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
$num_connacs = $pdo->query('SELECT COUNT(*) FROM convenios_nacs')->fetchColumn();
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
                        </tr>
                  <?php endforeach; ?>
            </tbody>
      </table>
      <div class="pagination">
            <?php if ($page > 1) : ?>
                  <a href="read.php?page=<?= $page - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
            <?php endif; ?>
            <?php if ($page * $records_per_page < $num_connacs) : ?>
                  <a href="read.php?page=<?= $page + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
            <?php endif; ?>
      </div>
</div>

