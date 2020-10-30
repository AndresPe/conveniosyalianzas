<?php
include 'index.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM convenios_nacs WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $connac = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$connac) {
        exit('Contact doesn\'t exist with that ID!');
    }
    // Make sure the user confirms before deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM convenios_nacs WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'You have deleted the contact!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>



<div class="content delete">
	<h2>Delete Convenio #<?=$connac['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete connac #<?=$connac['id']?>?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$connac['id']?>&confirm=yes">Yes</a>
        <a href="delete.php?id=<?=$connac['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

