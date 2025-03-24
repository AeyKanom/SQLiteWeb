<?php
$db = new PDO('sqlite:database.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($db) {
    echo "Connected<br>";
} else {
    echo "Connection failed" . $e->getMessage();
}

/*
createtable
$db->exec("CREATE TABLE user (
id INTEGER PRIMARY KEY AUTOINCREMENT,
์name TEXT NOT NULL)");*/

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
}
*/