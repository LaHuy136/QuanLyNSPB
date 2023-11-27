<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhân viên</title>
</head>
<style>
    button {
        float: right; 
        padding: 8px;
        background-color: #3b91d4;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button a {
        text-decoration: none;
        color: #fff;
    }

    button:hover {
        color: #fff;
        background-color: #04528f;
    }
</style>
<body>
<?php 
    $link = mysqli_connect("localhost", "root", "") or die('Could not connet MYSQL');
    mysqli_select_db($link,"DULIEU");
    $sql = "SELECT * FROM nhanvien";
    $rs = mysqli_query($link, $sql);
    echo '<table border = "1" width ="100%">';
    echo '<h3 style="text-align: center"> Dữ liệu bảng Nhân viên </h3>';
    
    echo '<tr> <th>ID nhân viên</th> <th>Họ tên</th> <th>ID phòng ban</th> <th>Địa chỉ</th>';
    while($row = mysqli_fetch_array($rs)) {
        echo '<tr> <td>'.$row['IDNV'].'</td>
        <td>'.$row['Hoten'].'</td>
        <td>'.$row['IDPB'].'</td>
        <td>'.$row['Diachi'].'</td>
        </tr>';
    }
    echo '</table> </br>';
    echo '<button type="button">
    <a href="chennv.php">Thêm nhân viên</a>
    </button>';
    mysqli_free_result($rs);
    mysqli_close($link);
?>
</body>
</html>