<?php
require('db_connection.php');

if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    $delete_stmt = $db->prepare("DELETE FROM document WHERE Id=:id");
    $delete_stmt->bindParam(':id', $id);
    $delete_stmt->execute();
    header('refresh:1;url=index.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>
        โปรแกรมจัดการเอกสาร
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <style>
        body {
            font-family: THSarabunPSK;
            justify-content: center;
            text-align: center;
        }

        #lb_1 {
            font-family: THSarabunPSK;
            margin-top: 1rem;
        }

        .action_bar {
            display: flex;
            justify-content: end;
            margin-right: 5rem;
        }
    </style>
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="container">
                <h1 id="lb_1">ทะเบียนหนังสือรับ ( ประเภททั่วไป )</h1>
                <div class="action_bar">
                    <a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="add_doc.php"
                        role="button">เพิ่ม</a>
                </div>

                <table class="table">
                    <tr>
                        <th>เลขทะเบียนรับ</th>
                        <th>ที่เอกสาร</th>
                        <th>ผู้ส่ง</th>
                        <th>วันที่รับ</th>
                        <th>รายละเอียด</th>
                        <th>กิจกรรม</th>
                    </tr>
                    <?php
                    $select_stmt = $db->query("SELECT * FROM document");
                    $select_stmt->execute();
                    while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td><?php echo $row['reciveId'] ?></td>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['sender'] ?></td>
                            <td><?php echo $row['reciveDate'] ?></td>
                            <td><?php echo $row['detail'] ?></td>
                            <td>
                                <button
                                    type="button"
                                    class="btn btn-warning"
                                    style="background-color: yellow;border-color: #fff;color: black;">
                                    แก้ไข
                                </button>

                                <a
                                    name=""
                                    id=""
                                    class="btn btn-danger"
                                    href="index.php?Id=<?php echo $row['Id'] ?>"
                                    role="button">ลบ</a>

                            </td>
                        </tr>
                    <?php endwhile ?>
                </table>
            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>