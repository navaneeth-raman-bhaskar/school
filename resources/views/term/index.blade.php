@extends('layouts.layout')
@section('content')
    <h3>List Terms</h3>
    <a class="btn btn-primary" href="{{route('terms.create')}}">Add Term</a>

    <table class="table">
        <thead>
        <tr>
            <th>Sl. No.</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody class="terms">
        @foreach($terms as $term)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$term->name}}</td>
                <td>
                    <a href="{{route('terms.show',$term)}}" class="btn btn-secondary">Show</a>
                    <a href="{{route('terms.edit',$term)}}" class="btn btn-success">Edit</a>
                    <a class="delete btn btn-danger" href="{{route('terms.destroy',$term)}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            {{$terms->links()}}
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('js/pages/term/term.js')}}"></script>
@endpush
