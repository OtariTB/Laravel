<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function store(Request $request, Student $student)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'enrollment_date' => 'required|date',
        ]);

        Enrollment::create([
            'student_id' => $student->id,
            'course_id' => $request->course_id,
            'enrollment_date' => $request->enrollment_date,
            'grade' => $request->grade,
        ]);

        return redirect()->route('students.enrollments', $student->id)
                         ->with('success', 'Student enrolled successfully!');
    }
}