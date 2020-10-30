<?php include '../../index.php';?>
<style>
<?php
include_once ('style.css');
?>
</style>
<?php

// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;

// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM convenios_inters ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page - 1) * $records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$connacs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
$num_connacs = $pdo->query('SELECT COUNT(*) FROM convenios_inters')->fetchColumn();
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
      <div class="pagination">
            <?php if ($page > 1) : ?>
                  <a href="read.php?page=<?= $page - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
            <?php endif; ?>
            <?php if ($page * $records_per_page < $num_connacs) : ?>
                  <a href="read.php?page=<?= $page + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
            <?php endif; ?>
      </div>
</div>

