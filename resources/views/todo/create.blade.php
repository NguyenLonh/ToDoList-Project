@extends('layout.layout')
@section('title', 'New Todo')
@section('content')
<form action="/todos" method="post">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Todo Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Todo Title">
    </div>

    <div class="mb-3">
        <label for="goal" class="form-label">Todo Goal</label>
        <input type="text" class="form-control" id="goal" name="goal" placeholder="Todo Goal">
    </div>

    <div class="mb-3">
        <label for="person" class="form-label">Todo Member</label>
        <select id="person" name="person" class="form-select" aria-label="Select Person">
            <option selected>Please choose one</option>
            @foreach($persons as $person)
            <option value="{{$person->id}}">{{$person->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="dealine" class="form-label">deadline</label>
        <input type="text" class="form-control" id="deadline" name="deadline" placeholder="Todo Bonus">
    </div>

    <div class="mb-3">
        <label for="bonus" class="form-label">Todo Bonus</label>
        <input type="text" class="form-control" id="bonus" name="bonus" placeholder="Todo Bonus">
    </div>

    <div class="mb-3">
        <label for="punish" class="form-label">Todo Punish</label>
        <input type="text" class="form-control" id="punish" name="punish" placeholder="Todo Punish">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Todo Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection