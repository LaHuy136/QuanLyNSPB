<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cập nhật</title>
</head>
<style>
        html,body {
            margin: 0;
            padding: 0;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }       

        .form-container {
            max-width: 660px;
            max-height: 500px;
            padding: 20px;
            margin: 30px auto 0 auto;
        }

        .form__row {
            padding: 8px 0;
            display: flex;
            justify-content: center;
        }

        .form__label {
            min-width: 110px;
            margin-top: 7px;
        }

        .form__input {
            flex: 1;
            padding: 5px;
        }

        .form__button {
            display: flex;
            padding: 8px;
            margin-left: 25px;
        }

        .form-container h1,
        .form-container p {
            text-align: center;
        }
</style>
<body onload="document.myForm.txtTenpb.focus()">
    <?php
        $IDPB = $_REQUEST['IDPB']; // nhận id phòng ban từ trang capnhat.php
        $link = mysqli_connect("localhost", "root", "") or die('Could not connet MYSQL');
        mysqli_select_db($link,"DULIEU");
        $sql = "SELECT * FROM phongban WHERE IDPB = '$IDPB'";
        $rs = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($rs);
    ?>
    <!-- gửi thông tin phòng ban cho xulycapnhat.php -->
    <div class="form-container">
        <form action='xulycapnhat.php?IDPB=<?php echo $row['IDPB'];?>' method='post' name="myForm">
            <h1>Cập nhập thông tin phòng ban</h1>
                <div class="form__row">
                    <label class="form__label" for="txtIDPB">Mã phòng ban</label>
                    <input class="form__input" size='20' name="txtIDPB" type="text" readonly
                    value='<?php echo $row['IDPB'];?>'>
                </div>
                <div class="form__row">
                    <label class="form__label" for="txtTenpb">Tên phòng ban</label>
                    <input class="form__input" name="txtTenpb" type="text" value='<?php echo $row['Tenpb'];?>'>
                </div>
                <div class="form__row">
                    <label class="form__label" for="txtMota">Mô tả</label>
                    <input class="form__input" name="txtMota" type="text" value='<?php echo $row['Mota'];?>'>
                </div>
                <div class="form__row">
                    <input class="form__button" type="submit" value="Cập nhật">
                    <input class="form__button" type="reset" for="reset" value="Nhập lại">
                </div>
        </form>
        <p><a href="capnhat.php">Quay lại</a></p>
    </div>
</body>
</html>