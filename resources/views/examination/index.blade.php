@extends('layouts.layout')
@section('content')
    <h3>Mark List</h3>
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
        @foreach($examinations as $examination)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$examination->student->name}}</td>
                <td>{{$examination->subject->name}}</td>
                <td>{{$examination->term->name}}</td>
                <td>{{$examination->mark}}</td>
                <td>
                    <a href="{{route('examinations.show',$examination)}}" class="btn btn-secondary">Show</a>
                    <a href="{{route('examinations.edit',$examination)}}" class="btn btn-success">Edit</a>
                    <a class="delete btn btn-danger" href="{{route('examinations.destroy',$examination)}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            {{$examinations->links()}}
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('js/pages/exam/exam.js')}}"></script>
@endpush
