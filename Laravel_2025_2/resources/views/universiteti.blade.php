<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <style>
        .center-text {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <a href="{{ url('/') }}">Home</a>
    <h1 class="center-text">GAU</h1>
    <a href="{{ url('/skola') }}">Skola</a>
    <a href="{{ url('/universiteti') }}">Universiteti</a>
</body>
</html>