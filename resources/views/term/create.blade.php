@extends('layouts.layout')
@section('content')
    <h3>Add Term</h3>
    @include('term.partials.form',['text'=>'Save','action'=>route('terms.store'),'method'=>'POST'])
@endsection
