<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgb(20, 16, 16); /* Change this if needed */
            z-index: 1000; /* Keep it on top */
        }

        .content {
            padding-top: 70px; /* Space for the fixed header */
        }
        .navbar {
            background-color: black; /* Màu nền menu */
        }
        .navbar .nav-link,
        .navbar .navbar-brand {
            color: white; /* Màu chữ */
        }
        .navbar .nav-link:hover,
        .navbar .navbar-brand:hover {
            color: #ccc; /* Màu chữ khi hover */
        }
       
        .dropdown.show .dropdown-menu {
            display: block; /* Hiện menu khi dropdown được mở */
        }
        .navbar .btn-register {
            background-color: #007bff !important; /* Màu nền của nút */
            color: white !important; /* Màu chữ */
            border: none; /* Không viền */
            padding: 0.5rem 1rem; /* Đệm cho nút */
            border-radius: 0.25rem; /* Bo góc */
        }

        .navbar .btn-register:hover {
            background-color: #0056b3 !important; /* Màu nền khi hover */
            color: white !important; /* Màu chữ khi hover */
        }


    </style>
    <title>Document</title>
</head>
<body>
    <header>
        
        <nav class="navbar navbar-expand-sm">
            
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('home') }}"><i class="bi bi-house"></i> Trang chủ</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#!/about"><i class="bi bi-info-circle"></i> Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('book.list') }}">Danh sách</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Góp ý</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hỏi đáp</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tài khoản
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
                        <li><a class="dropdown-item" href="#">Đăng kí</a></li>
                        <li><a class="dropdown-item" href="#">Quên mật khẩu</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Hồ sơ cá nhân</a></li>
                        <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                        <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Đơn đặt hàng</a></li>
                        </ul>
                    </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="#">
                                Đăng ký ngay
                            </a>
                        </li>
                    </ul>
                    
              </div>
            </div>
        </nav>
    </header>

</body>
</html>
