<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        header {
            background: #333;
            color: white;
            padding: 10px 20px;
        }
        a {
            color: #3490dc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .container {
            width: 80%;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
        }
        button, input[type="submit"] {
            background-color: #3490dc;
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover, input[type="submit"]:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <header>
        <h2>Student Portal</h2>
        <nav>
            <a href="{{ route('students.index') }}">Students</a> |
            <a href="{{ route('courses.index') }}">Courses</a>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
