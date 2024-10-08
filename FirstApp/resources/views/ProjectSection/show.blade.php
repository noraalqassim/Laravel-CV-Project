@extends('ProjectSection.app')
  
@section('content')
    <div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show project</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-light" href="{{ url('/') }}"> Back</a>
            </div>
        </div>
    </div>
      
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $project->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $project->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/images/{{ $project->image }}" width="500px">
            </div>
        </div>
    </div>
@endsection