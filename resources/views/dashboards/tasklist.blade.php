@include("navigation.header")

   <div id="responsive-table">

      <table id="table">
         <tr>
            <th> ID </th>
            <th> Task Title</th>
            <th> Date </th>
            <th> Actions </th>
         </tr>
     
       @foreach($taskAll as $task)

        <tr>
              <td>  {{$task->id}} </td>
              <td>  {{$task->taskTitle}} </td>
              <td>  {{$task->createDate}} </td>
              <td> <a href=""> View </a> || <a href="edit-task/{{ $task->id }}"> Edit </a> || <a href="delete-task/{{ $task->id }}"> Delete </a> </td>
        </tr>

       @endforeach

      
      </table>
   </div>

@include("navigation.footer")