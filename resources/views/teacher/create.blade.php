@extends('layouts.layout')
@section('content')
    <h3>Enroll Teacher</h3>
    @include('teacher.partials.form',['text'=>'Save','action'=>route('teachers.store'),'method'=>'POST'])
@endsection
