@extends('layouts.layout')
@section('content')
    <h3>List Subjects</h3>
    <a class="btn btn-primary" href="{{route('subjects.create')}}">Add Subject</a>

    <table class="table">
        <thead>
        <tr>
            <th>Sl. No.</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody class="subjects">
        @foreach($subjects as $subject)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$subject->name}}</td>
                <td>
                    <a href="{{route('subjects.show',$subject)}}" class="btn btn-secondary">Show</a>
                    <a href="{{route('subjects.edit',$subject)}}" class="btn btn-success">Edit</a>
                    <a class="delete btn btn-danger" href="{{route('subjects.destroy',$subject)}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            {{$subjects->links()}}
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('js/pages/subject/subject.js')}}"></script>
@endpush
