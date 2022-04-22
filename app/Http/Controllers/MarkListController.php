<?php


namespace App\Http\Controllers;


use App\Http\Requests\UpdateMarkListRequest;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Term;
use App\Services\MarkListService;

class MarkListController
{
    public function index(MarkListService $service)
    {
        return view('marklist.index')->with('data', $service->listData());
    }


    public function edit(Student $student)
    {
        $this->setFormData();
        return view('marklist.edit')->with(compact('student'))->with($this->data);
    }


    public function update(UpdateMarkListRequest $request, MarkListService $service, Student $student)
    {
        $service->update($request);
        return redirect()->route('marklist.index');
    }


    public function destroy(Student $student, $term)
    {
        $student->markLists()->where('term_id', $term)->delete();
        return response()->json();
    }

    private function setFormData(): void
    {
        $this->data['terms'] = Term::pluck('name', 'id');
        $this->data['subjects'] = Subject::pluck('name', 'id');
    }

}
