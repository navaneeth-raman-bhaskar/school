@extends('layouts.layout')
@section('content')
    <h3>Edit Term</h3>
    @include('term.partials.form',['text'=>'Update','action'=>route('terms.update',$term),'method'=>'PUT'])
@endsection
