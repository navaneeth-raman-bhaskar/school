@extends('layouts.layout')
@section('content')
    <h3>Add Subject</h3>
    @include('subject.partials.form',['text'=>'Save','action'=>route('subjects.store'),'method'=>'POST'])
@endsection
