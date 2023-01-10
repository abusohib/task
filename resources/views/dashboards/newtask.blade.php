@include("navigation.header")

   <div class="new-task-form">

        <form action="{{ url("newtasksubmit") }}" method="POST">
            @csrf <!-- {{ csrf_field() }} -->
         Task title   <input type="text" name="task_title" id="task_title">
          
            <input type="submit" name="newtasksubmit" value="Save">
        </form>

   </div>

@include("navigation.footer")