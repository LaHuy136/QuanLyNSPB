<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý login</title>
</head>
<body>
    <?php
    // lấy username & password từ login.php
        $user = $_REQUEST['username'];
        $pw = $_REQUEST['password'];
        if($user == "" || $pw == "") {
            header("location:login.php");
        }
        else {
            $link = mysqli_connect("localhost", "root", "") or die('Could not connet MYSQL');
            mysqli_select_db($link,"DULIEU");
            $sql = "SELECT * FROM admin WHERE username ='$user' and password='$pw'";
            $rs = mysqli_query($link, $sql);
            if(mysqli_num_rows($rs) == 0) header("Location: login.php");
            else {
                echo '
            <script>
                parent.frames["f2"].location.href = "afterlogin.php";
                parent.frames["f3"].location.href = "capnhat.php";
            </script>';
            }
            mysqli_free_result($rs);
            mysqli_close($link);
        }
    ?>
</body>
</html>