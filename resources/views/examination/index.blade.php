@extends('layouts.layout')
@section('content')
    <h3>List Exam Results</h3>
    <a class="btn btn-primary" href="{{route('examinations.create')}}">Mark Entry</a>

    <table class="table">
        <thead>
        <tr>
            <th>Sl. No.</th>
            <th>Student</th>
            <th>Subject</th>
            <th>Term</th>
            <th>Mark</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody class="exams">
        {{--@foreach($students as $student)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->gender_name}}</td>
                <td>{{$student->teacher->name}}</td>
                <td>
                    <a href="{{route('students.show',$student)}}" class="btn btn-secondary">Show</a>
                    <a href="{{route('students.edit',$student)}}" class="btn btn-success">Edit</a>
                    <a class="delete btn btn-danger" href="{{route('students.destroy',$student)}}">Delete</a>
                </td>
            </tr>
        @endforeach--}}
        </tbody>
    </table>
    <div class="row">
        <div class="col">
           {{-- {{$exams->links()}}--}}
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('js/pages/exam/exam.js')}}"></script>
@endpush
