@extends('layout')

@section('content')
<h2>{{ $student->name }}'s Enrollments</h2>

<h3>Enroll in a Course</h3>
<form action="{{ route('students.enroll', $student->id) }}" method="POST">
    @csrf
    <label>Course:</label>
    <select name="course_id" required>
        @foreach ($courses as $course)
            <option value="{{ $course->id }}">{{ $course->title }}</option>
        @endforeach
    </select>
    <label>Enrollment Date:</label>
    <input type="date" name="enrollment_date" required>
    <input type="submit" value="Enroll">
</form>

<h3>Already Enrolled Courses</h3>
<ul>
    @foreach ($enrolledCourses as $course)
        <li>{{ $course->title }}</li>
    @endforeach
</ul>
@endsection
