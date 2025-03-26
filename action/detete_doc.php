<?php
require('../db_connection.php');

$id;

$delete_stmt = $db->prepare("DELETE FROM document WHERE ID = :id");
$delete_stmt->bindParam(':id', $id);
$delete_stmt->execute();
