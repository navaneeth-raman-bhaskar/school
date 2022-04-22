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

    /**
     * This method will edit all mark list of the particular student in a particular term
     */
    public function edit(Student $student, int $tId)
    {
        $this->setFormData();
        $markLists = $student->markLists()->where('term_id', $tId)->get() ?? [];
        return view('marklist.edit')->with(compact('student'))
            ->with($this->data)->with(compact('markLists', 'tId'));
    }


    public function update(UpdateMarkListRequest $request, MarkListService $service, Student $student, int $term)
    {
        $service->update($student, $request, $term);
        return redirect()->route('marklist.index');
    }


    public function destroy(Student $student, int $term)
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
