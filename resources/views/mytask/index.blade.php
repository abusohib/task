@extends('mytask.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example f</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mytasks.create') }}"> Create New user</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mytasks as $task)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $task->taskTitle }}</td>
            <td>{{ $task->status }}</td>
            <td>
                <form action="{{ route('mytasks.destroy',$task->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('mytasks.show',$task->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('mytasks.edit',$task->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $mytasks->links() !!}
      
@endsection