<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý xóa tất cả nhân viên</title>
</head>
<body>
<?php
    // lấy IDNV từ xoathongtin1nv.php
    // $IDNV = $_REQUEST['IDNV'];
    $link = mysqli_connect("localhost", "root", "") or die('Could not connect to MySQL');
    mysqli_select_db($link, "DULIEU");
    $sql = "SELECT IDNV FROM nhanvien";
    $rs = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($rs)) {
        $IDNV = $_REQUEST[$row['IDNV']];
        $delQuery = "DELETE FROM nhanvien WHERE IDNV = '$IDNV'";
        $delRS = mysqli_query($link, $delQuery);
    }
    mysqli_free_result($rs);
    mysqli_close($link);
    header("Location: xoatatcanv.php");
    ?>
</body>
</html>