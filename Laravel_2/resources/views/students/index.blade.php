@extends('layout')

@section('content')
<h2>All Students</h2>
<a href="{{ route('students.create') }}">➕ Add New Student</a>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Birth Date</th>
        <th>Actions</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->birth_date }}</td>
        <td>
            <a href="{{ route('students.edit', $student->id) }}">✏️ Edit</a> |
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">🗑️ Delete</button>
            </form> |
            <a href="{{ route('students.enrollments', $student->id) }}">📚 Enrollments</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
