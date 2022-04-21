@extends('layouts.layout')
@section('content')
    <h3>Edit Student Details</h3>
    @include('student.partials.form',['text'=>'Update','action'=>route('students.update',$student),'method'=>'PUT'])
@endsection
