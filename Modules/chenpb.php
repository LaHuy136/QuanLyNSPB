<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chèn phòng ban</title>
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
<body onload="document.myForm.txtIDPB.focus()">
    <div class="form-container" >
        <form action='xulychenpb.php' method='post'>
            <h1>Thêm phòng ban</h1>
            <div class="form__row">
                <label class="form__label" for="txtIDPB">Mã phòng ban</label>
                <input class="form__input" size='20' name="txtIDPB" type="text">
            </div>
            <div class="form__row">
                <label class="form__label" for="txtTenpb">Tên phòng ban</label>
                <input class="form__input" name="txtTenpb" type="text" >
            </div>
            <div class="form__row">
                <label class="form__label" for="txtMota">Mô tả</label>
                <input class="form__input" name="txtMota" type="text" >
            </div>
            <div class="form__row">
                <input class="form__button" type="submit" value="Thêm">
                <input class="form__button" type="reset" for="reset" value="Nhập lại">
            </div>
        </form>
        <p><a href="xemthongtinpb.php">Quay lại</a></p>
    </div>
</body>
</html>