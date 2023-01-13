@include("navigation.header")

<div class="form-style">
    <h1> Task Edit Form </h1>
  <form action="" method="POST">
    <input type="hidden" name="taskid" value="{{$task->id}}" >
    <label for="tasktitle">Task Title</label>
    <input type="text" id="tasktitle" name="tasktitle" placeholder="Your task title.." value="{{$task->taskTitle}}">

    <label for="lname">Task Description</label>
     <textarea rows="10" cols="20" placeholder="Your task description...">{{$task->taskDescription}}</textarea>
    <input type="submit" name="savetask" value="Submit">
  </form>

</div>

@include("navigation.footer")