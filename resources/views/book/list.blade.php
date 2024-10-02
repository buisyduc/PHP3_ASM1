<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Sách</title>
    <style>
        body {
            background-color: #f4f4f4; /* Light background for the body */
            font-family: Arial, sans-serif; /* Font style */
        }

        .container {
            margin-top: 20px; /* Space above the container */
        }

        h2 {
            text-align: center; /* Center align the main title */
            margin-bottom: 30px; /* Space below the title */
            color: #333; /* Dark color for the title */
        }

        .list-group-item {
            border: 1px solid #ddd; /* Light border for list items */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth background change */
        }

        .list-group-item:hover {
            background-color: #e9ecef; /* Change background on hover */
        }

        .card {
            border: 1px solid #ddd; /* Light border for cards */
            border-radius: 8px; /* Rounded corners */
            margin-bottom: 20px; /* Space between cards */
            transition: box-shadow 0.3s; /* Smooth shadow effect */
        }

        .card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Shadow on hover */
        }

        .card img {
            height: 200px; /* Fixed height for book images */
            object-fit: cover; /* Cover the space */
        }

        .card-body {
            text-align: center; /* Center the text in card body */
        }

        .btn {
            background-color: #007bff; /* Button color */
            color: white; /* Button text color */
            border-radius: 5px; /* Rounded button corners */
            transition: background-color 0.3s; /* Smooth background change */
        }

        .btn:hover {
            background-color: #0056b3; /* Button hover color */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .col-sm-3, .col-sm-9 {
                margin-bottom: 20px; /* Space for smaller screens */
            }
            h2 {
                font-size: 20px; /* Adjust title size on small screens */
            }
        }
    </style>
</head>
<body>
    @extends('layout.index')

    @section('content')
    <div class="container mt-5">
        <h2>Danh sách Sách @if(isset($name)) {{ $name }} @endif</h2>
        <div class="row">
            <div class="col-sm-3">
                <h3>Danh mục</h3>
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <li class="list-group-item">
                            <a href="{{ route('book.category', ['id' => $category->id, 'name' => $category->name]) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    @foreach ($books as $book)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset('img/default-book.png') }}" class="card-img-top" alt="{{ $book->title }}">
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
        </div>
    </div>
    @endsection

</body>
</html>
