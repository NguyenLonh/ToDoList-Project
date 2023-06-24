@extends('layout.layout')
@section('title', 'Todo List')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$todo->title}}</h4>
            <h3 class="card-title">{{$todo->goal}}</h3>
            <h3 class="card-title">{{$todo->deadline}}</h3>
            <h3 class="card-title">{{$todo->bonus}}</h3>
            <h3 class="card-title">{{$todo->punish}}</h3>
            <p class="card-text">{{$todo->description}}</p>
        </div>
    </div>
@endsection