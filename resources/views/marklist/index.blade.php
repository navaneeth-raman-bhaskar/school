@extends('layouts.layout')
@section('content')
    <h3>Mark List </h3>

    <table class="table">
        <thead>
        <tr>
            <th>Sl. No.</th>
            <th>Student</th>
            @foreach($data['subjects'] as $subject)
                <td>{{$subject}}</td>
            @endforeach
            <th>Term</th>
            <th>Total Mark</th>
            <th>Created On</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody class="lists">
        @php $iteration=0; @endphp
        @foreach($data['students'] as $student)
            @foreach($data['terms'] as $tId=>$term)
                @php
                    $termExams = $student->markLists->where('term_id',$tId);
                @endphp
                @if($termExams->isNotEmpty())
                    <tr>
                        <td>{{++$iteration}}</td>
                        <td>{{$student->name}}</td>
                        @foreach($data['subjects'] as $sId=>$subject)
                            @php
                                $exam = $student->markLists->where('subject_id',$sId)->firstWhere('term_id',$tId);
                            @endphp
                            <td>{{$exam?->mark??'--'}}</td>
                        @endforeach
                        <td>{{$term}}</td>
                        <td>{{$termExams->sum('mark')}}</td>
                        <td>{{$student->created_at}}</td>
                        <td>
                            <a href="{{route('marklist.edit',[$student,$tId])}}" class="btn btn-success">Edit</a>
                            <a class="delete btn btn-danger" href="{{route('marklist.destroy',[$student,$tId])}}">Delete</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            {{$data['students']->links()}}
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('js/pages/marklist/marklist.js')}}"></script>
@endpush
