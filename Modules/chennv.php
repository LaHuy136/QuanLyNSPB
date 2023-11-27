<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chèn nhân viên</title>
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
            padding: 12px;
            margin-left: 25px;
            background-color: #3b91d4;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form__button:hover {
            color: #fff;
            background-color: #04528f;
        }

        .form-container h1,
        .form-container p {
            font-weight: 300;
            text-align: center;
        }
</style>
<body onload="document.myForm.txtIDNV.focus()">
    <div class="form-container" >
        <form action='xulychennv.php' method='post' name="myForm">
            <h1>Thêm nhân viên</h1>
            <div class="form__row">
                <label class="form__label" for="txtIDNV">Mã nhân viên</label>
                <input class="form__input" size='20' name="txtIDNV" type="text">
            </div>
            <div class="form__row">
                <label class="form__label" for="txtNV">Tên nhân viên</label>
                <input class="form__input" name="txtNV" type="text" >
            </div>
            <div class="form__row">
                <label class="form__label" for="txtIDPB">ID Phòng ban</label>
                <input class="form__input" name="txtIDPB" type="text" >
            </div>
            <div class="form__row">
                <label class="form__label" for="txtDiachi">Địa chỉ</label>
                <input class="form__input" name="txtDiachi" type="text" >
            </div>
            <div class="form__row">
                <input class="form__button" type="submit" value="Thêm">
                <input class="form__button" type="reset" for="reset" value="Nhập lại">
            </div>
        </form>
        <p><a href="xemthongtinnv.php">Quay lại</a></p>
    </div>
</body>
</html>