@extends('layout')

@section('content')
<h2>All Courses</h2>
<a href="{{ route('courses.create') }}">➕ Add New Course</a>

<table>
    <tr>
        <th>Title</th>
        <th>Code</th>
        <th>Credits</th>
        <th>Actions</th>
    </tr>
    @foreach ($courses as $course)
    <tr>
        <td>{{ $course->title }}</td>
        <td>{{ $course->code }}</td>
        <td>{{ $course->credits }}</td>
        <td>
            <a href="{{ route('courses.edit', $course->id) }}">✏️ Edit</a> |
            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">🗑️ Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
