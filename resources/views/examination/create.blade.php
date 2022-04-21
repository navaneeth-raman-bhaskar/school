@extends('layouts.layout')
@section('content')
    <h3>Mark Entry</h3>
    @include('examination.partials.form',['text'=>'Save','action'=>route('examinations.store'),'method'=>'POST'])
@endsection
