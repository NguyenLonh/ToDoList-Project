@extends('layout.layout')
@section('title', 'Todo List')
@section('content')
<div class="table-responsive">
  <table class="table table-striped table-hover">
      <thead class="table-light">
          <tr>
              <th>Title</th>
              <th>Goal</th>
              <th>Name</th>
              <th>Bonus</th>
              <th>Punish</th>
              <th>Dealine</th>
              <th>Description</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
                @foreach ($todos as $todo)
                <tr class="table-primary" >
                  <td>
                    <a href="{{url("/todos/".$todo->id)}}">
                    {{$todo->title}}
                    </a>
                  </td>
                  <td>{{$todo->goal}}</td>
                  <td>
                    @foreach ($persons as $person)
                    {{$person->name}}
                    @endforeach
                  </td>

                  <td>{{$todo->deadline}}</td>
                  <td>{{$todo->bonus}}</td>

                  <td>{{$todo->punish}}</td>

                  

                  <td>{{$todo->description}}</td>
                  <td>
                    <a href="{{url("/todos/".$todo->id)}}" class="btn btn-primary">View</a>
                    <a href="{{url("/todos/".$todo->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{url("/todos/".$todo->id)}}" method="post" class="d-inline">
                      {{ method_field('DELETE') }}
                      @csrf
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
          </tbody>
          <tfoot>
              
          </tfoot>
  </table>
</div>

@endsection
