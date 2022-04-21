@extends('layouts.layout')
@section('content')
    <h3>Edit Subject</h3>
    @include('subject.partials.form',['text'=>'Update','action'=>route('subjects.update',$subject),'method'=>'PUT'])
@endsection
