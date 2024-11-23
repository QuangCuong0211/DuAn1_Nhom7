<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Thư viện jQuery và Slick Slider -->
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <style>
        /* CSS cho slider */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        /* Thanh Menu */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
        }

        .navbar .logo {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        .navbar .menu {
            list-style: none;
            display: flex;
        }

        .navbar .menu li {
            margin: 0 15px;
        }

        .navbar .menu li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar .menu li a:hover {
            color: #ff6600;
        }

        .search-cart {
            display: flex;
            align-items: center;
        }

        .search-cart input[type="text"] {
            padding: 5px;
            border: none;
            border-radius: 3px;
        }

        .account-icon,
        .cart-icon {
            color: #fff;
            font-size: 18px;
            margin-left: 10px;
            text-decoration: none;
        }

        /* .banner {
  width: 100%;
  height: 200px;
  background-color: #f2f2f2;
  position: relative;
} */
        .banner-container {
            position: relative;
            max-width: 100%;
            height: 400px;
            overflow: hidden;
        }

        /* Hiển thị ảnh đang được chọn */
        .banner-slide.active {
            opacity: 1;
        }

        /* Chỉnh styling cho nội dung text trong banner */
        .banner-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }

        banner-slide {
            display: none;
        }

        .banner-slide.active {
            display: block;
        }

        .button-container {
            display: flex;
            gap: 10px;
        }

        .button {
            padding: 10px 20px;
            border: 2px solid black;
            border-radius: 25px;
            font-size: 16px;
            font-family: Arial, sans-serif;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button.new-product {
            background-color: white;
            color: black;
        }

        .button.best-seller {
            background-color: black;
            color: white;
        }

        .button .icon {
            margin-left: 2px;
        }
    </style>
</head>


<body>
    <!-- Thanh Menu -->
    <nav class="navbar">
        <div class="logo">COOLMATE</div>
        <ul class="menu">
            <li><a href="#">SẢN PHẨM</a></li>
            <li><a href="#">ĐỒ LÓT</a></li>
            <li><a href="#">ĐỒ THỂ THAO</a></li>
            <li><a href="#">MẶC HÀNG NGÀY</a></li>
            <li><a href="#">SẢN XUẤT RIÊNG</a></li>
        </ul>
        <div class="search-cart">
            <input type="text" placeholder="Tìm kiếm sản phẩm..." />
            <a href="#" class="account-icon">👤</a>
            <a href="#" class="cart-icon">🛒</a>
        </div>
    </nav>
    <div class="banner">
        <img onclick="next()" src="images/1.webp" alt="" id="imgs" />
        <script>
            var arr = [
                "images/2.webp",
                "images/3.webp",
                "images/a4.jpg",
            ];
            var index = 0;

            next = function() {
                var chuyenAnh = document.getElementById("imgs");
                if (index == arr.length - 1) {
                    index = 0;
                    chuyenAnh.src = arr[index];
                } else {
                    index++;
                    chuyenAnh.src = arr[index];
                }
            };
            setInterval(next, 3000);
        </script>
    </div>
    <article>