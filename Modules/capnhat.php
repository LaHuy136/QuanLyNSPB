<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật</title>
</head>
<body>
    <?php
        $link = mysqli_connect("localhost", "root", "") or die('Could not connet MYSQL');
        mysqli_select_db($link,"DULIEU");
        $sql = "SELECT * FROM phongban";
        $rs = mysqli_query($link, $sql);
        echo '<form action="xulycapnhat.php">';
        echo '<table border = "1" width ="100%">';
        echo '<caption> <h3> Dữ liệu bảng Phòng ban </h3> </caption>';
        echo '<tr> <th>ID phòng ban</th> <th>Tên phòng ban</th> <th>Mô tả</th> <th>Cập nhật</th>';
        while ($row = mysqli_fetch_array($rs)) {
            echo '<tr> <td>'.$row['IDPB'].'</td>
            <td>'.$row['Tenpb'].'</td>
            <td>'.$row['Mota'].'</td>
            <td><a href="form_capnhat.php?IDPB='.$row['IDPB'].'"> xxx </a></td> 
            </tr>';
        };
        echo '</table>';
        echo '</form>';
        mysqli_free_result($rs);
        mysqli_close($link);
    ?>
</body>
</html>