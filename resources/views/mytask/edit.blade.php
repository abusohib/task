@extends('mytask.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('mytasks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
        There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('mytasks.update',$mytask->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Task Title :</strong>
                <input type="text" name="taskTitle" value="{{$mytask->taskTitle}}" class="form-control" placeholder="Task Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Task Description :</strong>
                <textarea class="form-control" style="height:150px" name="taskDescription" placeholder="Task Description">{{ $mytask->taskDescription}}</textarea>
            </div>
        </div>
        <input type="hidden" name="status" value="1">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection