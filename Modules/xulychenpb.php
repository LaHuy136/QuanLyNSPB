<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý chèn phòng ban</title>
</head>
<body>
<?php
    // lấy thông tin nhân viên từ chenpb.php
    $IDPB = $_REQUEST['txtIDPB'];
    $Tenpb = $_REQUEST['txtTenpb'];
    $Mota = $_REQUEST['txtMota'];

    $link = mysqli_connect("localhost", "root", "") or die('Could not connet MYSQL');
    mysqli_select_db($link,"DULIEU");

    // lấy mã phòng ban đã tồn tại từ bảng phòng ban
    $checkIDPB = "SELECT IDPB FROM phongban WHERE IDPB = '$IDPB'";
    $resultPB = mysqli_query($link, $checkIDPB);

    // kiểm tra mã pb đã tồn tại hay chưa
    if (mysqli_num_rows($resultPB) > 0) {
        header("Location: chenpb.php");
    }else {
        $sql = "INSERT INTO phongban(IDPB, Tenpb, Mota) VALUES ('$IDPB','$Tenpb','$Mota')";
        $rs = mysqli_query($link, $sql);
        header("Location: xemthongtinpb.php");
    }
    mysqli_free_result($rs);
    mysqli_close($link);
?>
</body>
</html>