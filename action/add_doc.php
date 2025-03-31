<?php

require('db_connection.php');

//ส่วนรับข้อมูล
$doc_id;
$doc_date;
$doc_sender;
$doc_detail;

$name = "Anan1";

/*$insert_stmt = $db->prepare("INSERT INTO user (name)
    VALUES(:name1)");
$insert_stmt->bindParam(':name1', $name);
$insert_stmt->execute();
echo "Added";*/

$insert_stmt = $db->prepare("INSERT INTO document (reciveId,Id,sender,eciveDate,detail) VALUES (1, 'A1', 'Admin', '31-3-2546', 'Test');
");

$insert_stmt->bindParam(':id', $doc_id);
$insert_stmt->bindParam(':sender', $doc_sender);
$insert_stmt->bindParam(':dateadded', $doc_date);
$insert_stmt->bindParam(':detail', $doc_detail);

$insert_stmt->execute();
