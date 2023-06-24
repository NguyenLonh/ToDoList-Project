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
    <div class="mb-3">
        <label for="email" class="form-label">Person Email</label>
        <input type="text" class="form-control" id="email"  value="{{$person->email}}" name="email" placeholder="person Email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">person Phone</label>
        <input type="text" class="form-control" id="phone" value="{{$person->phone}}" name="phone" placeholder="person Phone">
    </div>
    <div class="mb-3">
        <label for="biodata" class="form-label">person Biodata</label>
        <textarea class="form-control" id="biodata" name="biodata" rows="3">{{$person->biodata}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
