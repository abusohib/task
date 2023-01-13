@include("navigation.header")

<div class="form-style">
    <h1> Task Edit Form </h1>
  <form action="{{ url("update-task-submit") }}" method="POST">
     @csrf <!-- {{ csrf_field() }} -->
    <input type="hidden" name="taskid" value="{{$task->id}}" >
    <label for="tasktitle">Task Title</label>
    <input type="text" id="task-title" name="task_title" placeholder="Your task title.." value="{{$task->taskTitle}}">

    <label for="taskdescription">Task Description</label>
     <textarea id="task-description" name="task_description" rows="10" cols="20" placeholder="Your task description...">{{$task->taskDescription}}</textarea>
    <input type="submit" name="savetask" value="Submit">
  </form>

</div>

@include("navigation.footer")