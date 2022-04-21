@extends('layouts.layout')
@section('content')
    <div class="container">
        <h3>Teacher</h3>
        <div class="row">
            <div class="col-2">
                Name:
            </div>
            <div class="col-10">
                {{$teacher->name}}
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                Gender:
            </div>
            <div class="col-10">
                {{$teacher->gender_name}}
            </div>
        </div>
        <a class="btn btn-secondary" href="{{route('teachers.index')}}">Back</a>
    </div>
@endsection
