@extends('layout.layout')
@section('title', 'New Member')
@section('content')
<form action="/persons" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Person Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Person Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Person Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Person Email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Person Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Person Phone">
    </div>
    <div class="mb-3">
        <label for="biodata" class="form-label">Person Biodata</label>
        <textarea class="form-control" id="biodata" name="biodata" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection