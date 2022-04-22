<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;

class SubjectController extends Controller
{

    public function index()
    {
        $subjects = Subject::select('id', 'name')->paginate();
        return view('subject.index')->with(compact('subjects'));
    }


    public function create()
    {
        $subject = new Subject();
        return view('subject.create')->with(compact('subject'));
    }

    public function store(StoreSubjectRequest $request)
    {
        $subject = new Subject();
        $subject->store($request);
        return redirect()->route('subjects.index');
    }


    public function show(Subject $subject)
    {
        return view('subject.show')->with(compact('subject'));

    }

    public function edit(Subject $subject)
    {
        return view('subject.edit')->with(compact('subject'));

    }

    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject->store($request);
        return redirect()->route('subjects.index');
    }


    public function destroy(Subject $subject)
    {
        $subject->delete();
        return response()->json();
    }
}
