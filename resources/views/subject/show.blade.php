@extends('layouts.layout')
@section('content')
    <div class="container">
        <h3>Subject</h3>
        <div class="row">
            <div class="col-2">
                Name:
            </div>
            <div class="col-10">
                {{$subject->name}}
            </div>
        </div>

        <a class="btn btn-secondary" href="{{route('subjects.index')}}">Back</a>
    </div>
@endsection
