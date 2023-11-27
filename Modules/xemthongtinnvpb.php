<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhân viên phòng ban</title>
</head>
<body>
<?php 
    $link = mysqli_connect("localhost", "root", "") or die('Could not connet MYSQL');
    mysqli_select_db($link,"DULIEU");

    $idpb = $_REQUEST['idpb'];
    $sql = "SELECT IDNV, Hoten, Diachi FROM phongban JOIN nhanvien ON phongban.IDPB = nhanvien.IDPB WHERE phongban.IDPB = '$idpb'";
    $rs = mysqli_query($link, $sql);
    if(mysqli_num_rows($rs) > 0) {
        echo '<table border = "1" width ="100%">';
        echo '<h3 style="text-align: center"> Thông tin nhân viên phòng ban </h3>';
        
        echo '<tr> <th>ID nhân viên</th> <th>Họ tên</th> <th>Địa chỉ</th>';
        while($row = mysqli_fetch_array($rs)) {
            echo '<tr> <td>'.$row['IDNV'].'</td>
            <td>'.$row['Hoten'].'</td>
            <td>'.$row['Diachi'].'</td>
            </tr>';
        }
        echo '</table>';
    }
    else {
        echo 'Không có nhân viên ở ', $idpb;
    }
    echo '<p style="text-align: center"><a href="xemthongtinpb.php">Quay lại</a></p>';
    mysqli_free_result($rs);
    mysqli_close($link);
?>
</body>
</html>