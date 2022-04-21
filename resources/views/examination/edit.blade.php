@extends('layouts.layout')
@section('content')
    <h3>Edit Marks Details</h3>
    @include('examination.partials.form',['text'=>'Update','action'=>route('examinations.update',$examination),'method'=>'PUT'])
@endsection
