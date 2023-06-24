@extends('layout.layout')
@section('title', 'Edit Person')
@section('content')
<form action="/persons/{{$person->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Person Name</label>
        <input type="text" class="form-control" id="name" value="{{$person->name}}" name="name" placeholder="person Name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection