<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::select('id', 'name', 'gender')->paginate();
        return view('teacher.index')->with(compact('teachers'));
    }


    public function create()
    {
        $teacher = new Teacher();
        return view('teacher.create')->with(compact('teacher'));
    }


    public function store(StoreTeacherRequest $request)
    {
        $teacher = new Teacher();
        $teacher->fill($request->only('name', 'gender'));
        $teacher->save();
        return redirect()->route('teachers.index');
    }


    public function show(Teacher $teacher)
    {
        return view('teacher.show')->with(compact('teacher'));
    }


    public function edit(Teacher $teacher)
    {
        return view('teacher.edit')->with(compact('teacher'));

    }


    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $teacher->fill($request->only('name', 'gender'));
        $teacher->save();
        return redirect()->route('teachers.index');
    }


    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return response()->json();
    }
}
