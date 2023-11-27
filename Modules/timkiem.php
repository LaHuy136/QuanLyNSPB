<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
</head>
<style>
    button {
        padding: 6px;
        background-color: #3b91d4;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        color: #fff;
        background-color: #04528f;
    }

</style>
<body onload="document.myForm.Infor.focus()">
    <caption> <h3> Tìm kiếm nhân viên </h3> </caption>
    <form id="myForm" action="xulytimkiem.php" method ="post" name = "myForm">
        <input style="margin-bottom: 10px" value="IDNV" type="checkbox" name="IDNV">IDNV
        <input type="checkbox" value="Hoten" name="Hoten">Họ tên
        <input type="checkbox" value="Diachi" name="Diachi">Địa chỉ</br>
        <input type="text" placeholder="Nhập thông tin tìm kiếm" name="Infor" style="padding: 4px;">
        <button type="submit" style="">Tìm kiếm</button>
    </form>
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
    echo '</table>';
    mysqli_free_result($rs);
    mysqli_close($link);

    ?>
</body>
</html>