<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết Sách</title>
    @extends('layout.index')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Chi tiết Sách</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" class="thumbnail img-fluid">
        </div>
        <div class="col-md-8">
            <h1>{{ $book->title }}</h1>
            <p><strong>Tác giả:</strong> {{ $book->author }}</p>
            <p><strong>Nhà xuất bản:</strong> {{ $book->publisher }}</p>
            <p><strong>Ngày xuất bản:</strong> {{ date('d/m/Y', strtotime($book->publication)) }}</p>
            <p><strong>Giá:</strong> {{ number_format($book->price, 0, ',', '.') }} VNĐ</p>
            <p><strong>Số lượng:</strong> {{ $book->quantity }}</p>
            <p><strong>Danh mục:</strong> {{ $category->name }}</p>
            <a href="{{ route('home') }}" class="btn btn-primary">Quay lại danh sách</a>
        </div>
    </div>
    <a href="{{ route('book.list') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection

<style>
    body {
        background-color: #f4f4f4; /* Light background for the body */
        font-family: Arial, sans-serif; /* Font style */
        margin: 0; /* Remove default margin */
        padding: 20px; /* Add padding around the body */
    }

    .container {
        max-width: 800px; /* Max width for the container */
        margin: auto; /* Center the container */
        background-color: white; /* White background for content */
        padding: 20px; /* Padding inside the container */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
    }

    h1 {
        margin-bottom: 20px; /* Space below the title */
        color: #333; /* Dark color for the title */
    }

    .thumbnail {
        width: 100%; /* Full width for the image */
        height: auto; /* Maintain aspect ratio */
        border-radius: 5px; /* Rounded corners for the image */
        margin-bottom: 20px; /* Space below the image */
    }

    p {
        font-size: 16px; /* Font size for paragraphs */
        color: #555; /* Dark gray for text */
        margin: 10px 0; /* Vertical space for paragraphs */
    }

    strong {
        color: #007bff; /* Color for labels */
    }

    .btn {
        display: inline-block; /* Inline block for button styling */
        padding: 10px 15px; /* Padding for buttons */
        margin-top: 20px; /* Space above the button */
        background-color: #007bff; /* Button color */
        color: white; /* Button text color */
        text-decoration: none; /* Remove underline */
        border-radius: 5px; /* Rounded button corners */
        transition: background-color 0.3s; /* Smooth background change */
    }

    .btn:hover {
        background-color: #0056b3; /* Darker button color on hover */
    }
</style>

</body>
</html>
