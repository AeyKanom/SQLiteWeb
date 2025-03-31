<?php

require('func.php');

$db = new PDO('sqlite:database.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($db) {

    try {

        $crate_stmt  = $db->prepare("CREATE TABLE document (
            reciveId INTEGER ,
            Id TEXT NOT NULL,
            sender TEXT NOT NULL,
            reciveDate TEXT NOT NULL,
            detail TEXT NOT NULL,
            PRIMARY KEY(reciveId AUTOINCREMENT)
        )");

        $crate_stmt->execute();

        console_output("Create table doucument is successfully.");
    } catch (Exception $e) {
        //echo $e . "<br>";
        console_output("Table doucument is ready in database.");
    }
    console_output("Database is connected.");
} else {
    echo "Database connection failed.<br>" . $e->getMessage();
}
