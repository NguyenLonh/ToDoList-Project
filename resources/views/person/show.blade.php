@extends('layout.layout')
@section('title', 'Person Details')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$person->name}}</h4>
            <p class="card-text">{{$person->email}}</p>
            <p class="card-text">{{$person->phone}}</p>
            <p class="card-text">{{$person->biodata}}</p>
        </div>
    </div>
@endsection

