<?php


namespace App\Services;


use App\Http\Requests\UpdateMarkListRequest;
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

    public function update(Student $student, UpdateMarkListRequest $request, int $term)
    {
        $exams = $request->get('exam');
        foreach ($exams as $examId => $data) {
            $student->markLists()->whereId($examId)->where('term_id', $term)->update($data);
        }
    }
}
