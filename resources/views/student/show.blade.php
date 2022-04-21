@extends('layouts.layout')
@section('content')
    <div class="container">
        <h3>Student</h3>
        <div class="row">
            <div class="col-4">
                Name:
            </div>
            <div class="col-8">
                {{$student->name}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Age:
            </div>
            <div class="col-8">
                {{$student->age}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Gender:
            </div>
            <div class="col-8">
                {{$student->gender_name}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                teacher In-Charge:
            </div>
            <div class="col-8">
                {{$student->teacher->name}}
            </div>
        </div>
        <a class="btn btn-secondary" href="{{route('students.index')}}">Back</a>
    </div>
@endsection
