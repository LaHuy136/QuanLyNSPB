<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .form-container h1 {
            text-align: center;
            font-weight: 300;
        }
    </style>
</head>
<body onload="document.myForm.username.focus()">
    <div class="form-container">
        <h1>Đăng nhập</h1>
        <form action="xulylogin.php" class="form" method='post' name="myForm">
            <div class="form__row">
                <label class="form__label" for="username">Tên đăng nhập</label>
                <input class="form__input" name="username" type="text" required>
            </div>
            <div class="form__row">
                <label class="form__label" for="password">Mật khẩu</label>
                <input class="form__input" name="password" type="password" required>
            </div>
            <div class="form__row">
                <input class="form__button" type="submit" name="login" value="Đăng nhập">
            </div>
        </form>
    </div>
</body>
</html>