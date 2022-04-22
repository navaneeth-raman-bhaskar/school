<?php


namespace App\Services;


use App\Http\Requests\UpdateMarkListRequest;
use App\Models\Examination;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Term;

class MarkListService
{

    public function listData(): array
    {
        $students = Student::select('id', 'created_at', 'name')->with([
            'markLists:id,student_id,term_id,subject_id,mark',
            'markLists.term:id,name',
            'markLists.subject:id,name',
        ])->paginate();

        $subjects = Subject::pluck('name', 'id');
        $terms = Term::pluck('name', 'id');

        return compact('subjects', 'students', 'terms');
    }

    public function update(UpdateMarkListRequest $request)
    {
        $exams = $request->get('exam');
        foreach ($exams as $examId => $data) {
            Examination::whereId($examId)->update($data);
        }
    }
}
