@extends('layouts.layout')
@section('content')
    <h3>Edit Teacher Details</h3>
    @include('teacher.partials.form',['text'=>'Update','action'=>route('teachers.update',$teacher),'method'=>'PUT'])
@endsection
