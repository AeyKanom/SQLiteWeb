<?php

require('db_connection.php');

//ส่วนรับข้อมูล
$doc_id;
$doc_detail;
$doc_date;
$doc_sender;
$doc_detail;

$name = "Anan1";


/*$insert_stmt = $db->prepare("INSERT INTO user (name)
    VALUES(:name1)");
$insert_stmt->bindParam(':name1', $name);
$insert_stmt->execute();
echo "Added";*/

$insert_stmt = $db->prepare("INSERT INTO ");
