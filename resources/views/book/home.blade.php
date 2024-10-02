<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Trang chủ</title>
    <style>
        
        body {
            background-color: #f4f4f4; /* Nền sáng cho trang */
            font-family: Arial, sans-serif; /* Font chữ */
        }

        .container {
            margin-top: 20px; /* Khoảng cách trên cho container */
        }

        .carousel {
            margin-bottom: 20px; /* Khoảng cách dưới cho carousel */
        }

        .carousel-inner {
            position: relative;
        }

        .carousel-inner img {
            height: 600px; /* Set fixed height for all carousel images */
            object-fit: cover; /* Maintain aspect ratio and cover the space */
        }

        .carousel-item::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
        }

        .card {
            border: 1px solid #ddd; /* Viền nhẹ cho thẻ */
            border-radius: 8px; /* Bo góc cho thẻ */
            transition: box-shadow 0.3s; /* Hiệu ứng chuyển tiếp cho shadow */
            margin-bottom: 30px; /* Khoảng cách giữa các thẻ */
            height: 400px; /* Chiều cao cố định cho thẻ */
        }

        .card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Shadow khi hover */
        }

        .image-container {
            width: 100%; /* Chiều rộng tối đa */
            height: 200px; /* Chiều cao cố định */
            overflow: hidden; /* Ẩn phần hình ảnh vượt ra ngoài khung */
            border-bottom: 1px solid #ddd; /* Viền dưới cho khung hình ảnh */
            background-color: #e9ecef; /* Background color for image container */
        }

        .image-container img {
            width: 100%; /* Hình ảnh sẽ rộng bằng chiều rộng của khung */
            height: auto; /* Chiều cao tự động điều chỉnh */
            object-fit: cover; /* Cắt để lấp đầy không gian */
        }

        h2 {
            font-size: 24px; /* Kích thước chữ cho tiêu đề */
            color: #333; /* Màu chữ tối */
            margin-bottom: 15px; /* Khoảng cách dưới cho tiêu đề */
            text-align: center; /* Center the heading */
        }

        .card-body {
            text-align: center; /* Center text in card body */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center content vertically */
            height: 100%; /* Make the card body take full height */
        }

        .btn {
            background-color: #007bff; /* Màu nền cho nút */
            color: white; /* Màu chữ cho nút */
        }

        .btn:hover {
            background-color: #0056b3; /* Màu nền khi hover */
        }
    </style>
</head>
<body>
    @extends('layout.index')
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/banner-thoi-trang-bi-an.jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner-mau-vang-den-NO001.jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/banner-thoi-trang-nam-1.jpg') }}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    @section('content')
    <div class="container mt-5">
        <h2>Sach nổi bật</h2>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4">
                    <div class="card">
                        <div class="image-container">
                            <img src="{{ asset('img/default-book.png') }}" class="card-img-top" alt="{{ $book->title }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">{{ number_format($book->price, 0, ',', '.') }} VNĐ</p>
                            <a href="{{ route('book.detail', $book->id) }}" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
