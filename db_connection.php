<?php
$db = new PDO('sqlite:database.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($db) {
    echo "Database is connected.<br>";
    $crate_stmt  = $db->prepare("CREATE TABLE sqlite_sequence(name,seq)");
    $crate_stmt->execute();
} else {
    echo "Database connection failed.<br>" . $e->getMessage();
}
$name = "document";
$select_stmt = $db->prepare("SELECT name FROM sqlite_sequence WHERE name=:tb_name");
$select_stmt->bindParam(':tb_name', $name);
$select_stmt->execute();
$tb_check = $select_stmt->fetch(PDO::FETCH_ASSOC);
print_r("tb_name = " . $tb_check['name'] . "<br>");

if (!$tb_check) {

    $crate_stmt  = $db->prepare("CREATE TABLE document (
        reciveId INTEGER,
        Id TEXT NOT NULL,
        sender TEXT NOT NULL,
        reciveDate TEXT NOT NULL,
        detail TEXT NOT NULL,
        PRIMARY KEY(reciveId AUTOINCREMENT)
    )");

    $crate_stmt->execute();


    /*
    $id = "a1";
    $sender = "Admin";
    $dete = "2586-03-31";
    $detail = "Test table.";
    $insert_stmt = $db->prepare("INSERT INTO document (name)
    VALUES(:name1)");
    $insert_stmt->bindParam(':name1', $name);
    $insert_stmt->execute();*/

    print_r("Create table doucument is successfully.");
} else {
    print_r("Table doucument is ready.");
}
/*$db->exec("CREATE TABLE document (
    reciveId INTEGER PRIMARY KEY AUTOINCREMENT,
    id TEXT NOT NULL,
    sender TEXT NOT NULL,
    dateadded datetime NOT NULL,
    detail TEXT NOT NULL)");
echo "Table document is create.";*/

/*
$name = "Anan1";
$insert_stmt = $db->prepare("INSERT INTO user (name)
    VALUES(:name1)");
$insert_stmt->bindParam(':name1', $name);
$insert_stmt->execute();
echo "Added";*/
/*
$name = "Matewin";
$id = 1;
$update_stmt = $db->prepare("UPDATE user SET name = :nName WHERE id = :id");
$update_stmt->bindParam(':nName', $name);
$update_stmt->bindParam(':id', $id);
$update_stmt->execute();

$id = 9;
$delete_stmt = $db->prepare("DELETE FROM user WHERE id=:id");
$delete_stmt->bindParam(':id', $id);
$delete_stmt->execute();

$select_stmt = $db->query("SELECT * FROM user");
$select_stmt->execute();

/* one row select
$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
print_r($row);
echo "name=>" . $row['name'];
*/

//muti rowselect
/*
$rows = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
    echo "Username => " . $row['name'] . "<br>";
}*/
