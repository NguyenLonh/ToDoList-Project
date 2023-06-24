@extends('layout.layout')
@section('title', 'Person List')
@section('content')
<div class="table-responsive">
  <table class="table table-striped table-hover">
      <thead class="table-light">
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Biodata</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
                @foreach ($persons as $person)
                <tr class="table-primary" >
                  <td>
                    <a href="{{url("/persons/".$person->id)}}">
                    {{$person->name}}
                    </a>
                  </td>
          
                  <td>{{$person->email}}</td>

                  <td>{{$person->biodata}}</td>

                  <td>
                    <a href="{{url("/persons/".$person->id)}}" class="btn btn-primary">View</a>
                    <a href="{{url("/persons/".$person->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{url("/persons/".$person->id)}}" method="post" class="d-inline">
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
