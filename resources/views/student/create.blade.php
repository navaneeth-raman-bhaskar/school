@extends('layouts.layout')
@section('content')
    <h3>Enroll Student</h3>
    @include('student.partials.form',['text'=>'Save','action'=>route('students.store'),'method'=>'POST'])
@endsection
