<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý cập nhật</title>
</head>
<body>
    <?php
    // lấy thông tin phòng ban từ form_capnhat.php
        $IDPB = $_REQUEST['IDPB'];
        $Tenpb = $_REQUEST['txtTenpb'];
        $Mota = $_REQUEST['txtMota'];
        
        $link = mysqli_connect("localhost", "root", "") or die('Could not connet MYSQL');
        mysqli_select_db($link,"DULIEU");
        $sql = "UPDATE phongban SET Tenpb = '$Tenpb', Mota ='$Mota' WHERE IDPB = '$IDPB'";
        $rs = mysqli_query($link, $sql);
        header("Location: capnhat.php"); // thực hiện cập nhật phòng ban và quay lại capnhat.php
        mysqli_free_result($rs);
        mysqli_close($link);
    ?>
</body>
</html>