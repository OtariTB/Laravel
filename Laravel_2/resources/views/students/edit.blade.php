@extends('layout')

@section('content')
<h2>Edit Student</h2>

<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $student->name }}" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $student->email }}" required><br><br>

    <label>Birth Date:</label>
    <input type="date" name="birth_date" value="{{ $student->birth_date }}" required><br><br>

    <input type="submit" value="Update Student">
</form>
@endsection
