@extends('layouts.layout')
@section('content')
    <div class="container">
        <h3>Mark List</h3>
        <div class="row">
            <div class="col-4">
                Student:
            </div>
            <div class="col-8">
                {{$examination->student->name}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Subject:
            </div>
            <div class="col-8">
                {{$examination->subject->name}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Term:
            </div>
            <div class="col-8">
                {{$examination->term->name}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Mark
            </div>
            <div class="col-8">
                {{$examination->mark}}
            </div>
        </div>
        <a class="btn btn-secondary" href="{{route('examinations.index')}}">Back</a>
    </div>
@endsection
