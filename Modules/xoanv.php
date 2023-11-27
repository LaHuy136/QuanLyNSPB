<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa nhân viên</title>
</head>
<body>
<?php 
    $link = mysqli_connect("localhost", "root", "") or die('Could not connet MYSQL');
    mysqli_select_db($link,"DULIEU");
    $sql = "SELECT * FROM nhanvien";
    $rs = mysqli_query($link, $sql);
    echo '<form method="post" action="xulyxoanv.php">';
    echo '<table border = "1" width ="100%">';
    echo '<h3 style="text-align: center"> Dữ liệu bảng Nhân viên </h3>';
    
    echo '<tr> <th>ID nhân viên</th> <th>Họ tên</th> <th>ID phòng ban</th> <th>Địa chỉ</th> <th></th>' ;
    while($row = mysqli_fetch_array($rs)) {
        echo '<tr> <td>'.$row['IDNV'].'</td>
        <td>'.$row['Hoten'].'</td>
        <td>'.$row['IDPB'].'</td>
        <td>'.$row['Diachi'].'</td>
        <td><a href="xulyxoanv.php?IDNV='.$row['IDNV'].'" style="text-decoration: none";> Xóa </a></td>
        </tr>';
    }
    echo '</table>';
    echo '</form>';
    mysqli_free_result($rs);
    mysqli_close($link);
?>
</body>
</html>