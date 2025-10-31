@extends('layout')

@section('content')
<h2>Add New Student</h2>

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Birth Date:</label>
    <input type="date" name="birth_date" required><br><br>

    <input type="submit" value="Save Student">
</form>
@endsection
