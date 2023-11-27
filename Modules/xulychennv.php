<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý chèn nhân viên</title>
</head>
<body>
<?php
    // lấy thông tin nhân viên từ chennv.php
    $IDNV = $_REQUEST['txtIDNV'];
    $Tennv = $_REQUEST['txtNV'];
    $IDPB = $_REQUEST['txtIDPB'];
    $Diachi = $_REQUEST['txtDiachi'];

    $link = mysqli_connect("localhost", "root", "") or die('Could not connet MYSQL');
    mysqli_select_db($link,"DULIEU");

    // lấy mã nhân viên đã tồn tại từ bảng nhân viên
    $checkIDNV = "SELECT IDNV FROM nhanvien WHERE IDNV = '$IDNV'";
    $resultNV = mysqli_query($link, $checkIDNV);

    // lấy mã phòng ban đã tồn tại từ bảng phòng ban
    $checkIDPB = "SELECT IDPB FROM phongban WHERE IDPB = '$IDPB'";
    $resultPB = mysqli_query($link, $checkIDPB);

    // kiểm tra mã nv và mã pb đã tồn tại hay chưa
    if (mysqli_num_rows($resultNV) > 0 || mysqli_num_rows($resultPB) == 0) {
        header("Location: chennv.php");
    }else {
        $sql = "INSERT INTO nhanvien(IDNV, Hoten, IDPB, Diachi) VALUES ('$IDNV','$Tennv','$IDPB','$Diachi')";
        $rs = mysqli_query($link, $sql);
        header("Location: xemthongtinnv.php");
    }
    mysqli_free_result($resultNV);
    mysqli_free_result($resultPB);
    mysqli_free_result($rs);
    mysqli_close($link);
?>
</body>
</html>