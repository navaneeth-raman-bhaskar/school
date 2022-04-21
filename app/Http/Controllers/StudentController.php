<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Teacher;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::select('id', 'name', 'age', 'gender', 'teacher_id')
            ->with('teacher:id,name')->paginate();
        return view('student.index')->with(compact('students'));
    }


    public function create()
    {
        $student = new Student();
        $teachers = Teacher::pluck('name', 'id');
        return view('student.create')->with(compact('student', 'teachers'));
    }


    public function store(StoreStudentRequest $request)
    {
        $student = new Student();
        $student->fill($request->only('name', 'age', 'teacher_id', 'gender'));
        $student->save();
        return redirect()->route('students.index');
    }


    public function show(Student $student)
    {
        return view('student.show')->with(compact('student'));
    }


    public function edit(Student $student)
    {
        $teachers = Teacher::pluck('name', 'id');
        return view('student.edit')->with(compact('student', 'teachers'));
    }


    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->fill($request->only('name', 'age', 'teacher_id', 'gender'));
        $student->save();
        return redirect()->route('students.index');
    }


    public function destroy(Student $student)
    {

    }
}
