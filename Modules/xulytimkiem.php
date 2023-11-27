<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý tìm kiếm</title>
</head>
<body>
    <?php
    // lấy thông tin nhân viên từ timkiem.php
    $Infor = $_REQUEST['Infor'];
    $IDNV = @($_REQUEST['IDNV']);
    $Hoten = @($_REQUEST['Hoten']);
    $Diachi = @($_REQUEST['Diachi']);
    if($Infor === "") {
        header("Location: timkiem.php");
    }
    else {
        $link = mysqli_connect("localhost", "root", "") or die('Could not connect to MySQL');
        mysqli_select_db($link, "DULIEU");
        $sql = "SELECT * FROM nhanvien ";
        // kiểm tra cả 3 trường có checked
        if($IDNV != null || $Hoten != null || $Diachi != null) { 
            $sql .= " WHERE ";
        }
        // IDNV và Hoten khác rỗng 
        if($IDNV != null) {
            $sql .= " $IDNV LIKE '%$Infor%' ";
            if($Hoten != null) $sql .= " OR ";
        }
        // Hoten và DiaChi khác rỗng
        if($Hoten != null) {
            $sql .= " $Hoten LIKE '%$Infor%' ";
            if($Diachi != null) $sql .= " OR ";
        }
        // Diachi khác rỗng
        if($Diachi != null) {
            $sql .= " $Diachi LIKE '%$Infor%' ";
        }
        $rs = mysqli_query($link, $sql);
        echo '<table border="1" width="100%">';
        echo '<h3 style="text-align: center"> Thông tin nhân viên vừa tìm kiếm </h3>';
        echo '<tr> <th>ID nhân viên</th> <th>Họ tên</th> <th>ID phòng ban</th> <th>Địa chỉ</th>';
        while ($row = mysqli_fetch_array($rs)) {
            echo '<tr> <td>'.$row['IDNV'].'</td>
            <td>'.$row['Hoten'].'</td>
            <td>'.$row['IDPB'].'</td>
            <td>'.$row['Diachi'].'</td>
            </tr>';
        }
        echo '</table>';
        echo '<p style="text-align: center"><a href="timkiem.php">Quay lại</a></p>';
        mysqli_free_result($rs);
        mysqli_close($link);
    }
    ?>
</body>
</html>