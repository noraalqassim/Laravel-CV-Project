@extends('ProjectSection.app')
  
@section('content')
    <div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nora Projects</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-light" href="{{ url('create') }}"> Create New project</a>
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success colersuc">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($project as $projects)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $projects->image }}" width="100px"></td>
            <td>{{ $projects->name }}</td>
            <td>{{ $projects->detail }}</td>
            <td>
                <form action="{{ route('destroy',$projects->id) }}" method="POST">
      
                    <a class="btn btn-light" href="{{ route('show',$projects->id) }}">Show</a>
       
                    <a class="btn btn-light" href="{{ route('edit',$projects->id) }}">Edit</a>
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-light">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     
    {!! $project->links() !!}
 
@endsection