@extends('layout')

@section('content')
<h2>Add New Course</h2>

<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required><br><br>

    <label>Code:</label>
    <input type="text" name="code" required><br><br>

    <label>Credits:</label>
    <input type="number" name="credits" required><br><br>

    <input type="submit" value="Save Course">
</form>
@endsection
