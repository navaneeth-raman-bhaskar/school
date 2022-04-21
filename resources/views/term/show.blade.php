@extends('layouts.layout')
@section('content')
    <div class="container">
        <h3>Term</h3>
        <div class="row">
            <div class="col-2">
                Name:
            </div>
            <div class="col-10">
                {{$term->name}}
            </div>
        </div>

        <a class="btn btn-secondary" href="{{route('terms.index')}}">Back</a>
    </div>
@endsection
