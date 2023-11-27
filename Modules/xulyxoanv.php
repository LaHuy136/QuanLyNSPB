<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý xóa nhân viên</title>
</head>
<body>
<?php
    // lấy IDNV từ xoanv.php
    $IDNV = $_REQUEST['IDNV'];
    $link = mysqli_connect("localhost", "root", "") or die('Could not connect to MySQL');
    mysqli_select_db($link, "DULIEU");
    $sql = "DELETE FROM nhanvien WHERE IDNV = '$IDNV'";
    $rs = mysqli_query($link, $sql);
    // mysqli_result($rs);
    mysqli_close($link);
    header("Location: xoanv.php");
    ?>
</body>
</html>