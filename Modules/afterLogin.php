<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện khi đăng nhập</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-size: 1rem;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            background-color: #cbe4f7;
        }

        .menu {
            padding: 10px;
        }

        .list-category {
            list-style: none;
        }

        .category-item__link {
            display: flex;
            justify-content: center;
            margin: 0 0 30px -40px;
            padding: 2px 0;
            text-decoration: none;
            border: 1px solid #f9f9f9;
            border-radius: 10px;
            background-color: #fff;
        }

        .category-item__link:hover {
            background-color: #acd4f2;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="menu">
        <ul class="list-category">
            <li class="category-item">
                <a class="category-item__link" href="../Modules/xemthongtinnv.php" target = "f3">Xem nhân viên</a>
            </li>
            <li class="category-item">
                <a class="category-item__link" href="../Modules/xemthongtinpb.php" target = "f3">Xem phòng ban</a>
            </li>
            <li class="category-item">
                <a class="category-item__link" href="../Modules/timkiem.php" target = "f3">Tìm kiếm </a>
            </li>
            <li class="category-item">
                <a class="category-item__link" href="../Modules/capnhat.php" target = "f3">Cập nhật thông tin</a>
            </li>
            <li class="category-item">
                <a class="category-item__link" href="../Modules/xoanv.php" target = "f3">Xóa thông tin </a>
            </li>
            <li class="category-item">
                <a class="category-item__link" href="../Modules/xoatatcanv.php" target = "f3">Xóa tất cả thông tin</a>
            </li>
            <!-- <li class="category-item">
                <a class="category-item__link" href="#" id="logoutLink">Đăng xuất</a>
            </li> -->
        </ul>
    </div>
</body>
</html>
