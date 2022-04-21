@extends('layouts.layout')
@section('content')
    <h3>List Teachers</h3>
    <a class="btn btn-primary" href="{{route('teachers.create')}}">Enroll Teacher</a>

    <table class="table">
        <thead>
        <tr>
            <th>Sl. No.</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody class="teachers">
        @foreach($teachers as $teacher)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->gender_name}}</td>
                <td>
                    <a href="{{route('teachers.show',$teacher)}}" class="btn btn-secondary">Show</a>
                    <a href="{{route('teachers.edit',$teacher)}}" class="btn btn-success">Edit</a>
                    <a class="delete btn btn-danger" href="{{route('teachers.destroy',$teacher)}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            {{$teachers->links()}}
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('js/pages/teacher/teacher.js')}}"></script>
@endpush
