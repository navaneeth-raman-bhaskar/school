<?php

namespace App\Http\Controllers;

use App\Models\Examination;
use App\Http\Requests\StoreExaminationRequest;
use App\Http\Requests\UpdateExaminationRequest;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Term;

class ExaminationController extends Controller
{

    private array $data;

    public function index()
    {
        $examinations = Examination::select('id', 'mark', 'student_id', 'subject_id', 'term_id')
            ->with('student:id,name', 'subject:id,name', 'term:id,name')
            ->paginate();
        return view('examination.index')->with(compact('examinations'));
    }


    public function create()
    {
        $examination = new Examination();
        $this->setFormData();
        return view('examination.create')->with(compact('examination'))->with($this->data);

    }


    public function store(StoreExaminationRequest $request)
    {
        $examination = new Examination();
        $examination->fill($request->only([
            'student_id',
            'subject_id',
            'term_id',
            'mark',
            'min_mark',
            'max_mark',
        ]));
        $examination->save();
        return redirect()->route('examinations.index');

    }


    public function show(Examination $examination)
    {
        return view('examination.show')->with(compact('examination'));
    }


    public function edit(Examination $examination)
    {
        $this->setFormData();
        return view('examination.edit')->with(compact('examination'))->with($this->data);
    }


    public function update(UpdateExaminationRequest $request, Examination $examination)
    {
        $examination->fill($request->only([
            'student_id',
            'subject_id',
            'term_id',
            'mark',
            'min_mark',
            'max_mark',
        ]));
        $examination->save();
        return redirect()->route('examinations.index');
    }


    public function destroy(Examination $examination)
    {
        $examination->delete();
        return response()->json();
    }

    private function setFormData(): void
    {
        $this->data['terms'] = Term::pluck('name', 'id');
        $this->data['subjects'] = Subject::pluck('name', 'id');
        $this->data['students'] = Student::pluck('name', 'id');
    }
}
