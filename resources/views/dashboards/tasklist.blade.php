@include("navigation.header")

   <div id="responsive-table">

      <table id="table">
         <tr>
            <th> ID </th>
            <th> Task Title</th>
            <th> Date </th>
            <th> Status </th>
         </tr>
     
       @foreach($taskAll as $task)

        <tr>
              <td>  {{$task->id}} </td>
              <td>  {{$task->taskTitle}} </td>
              <td>  {{$task->createDate}} </td>
              <td>  {{$task->taskStatus}} </td>
        </tr>

       @endforeach

      
      </table>
   </div>

@include("navigation.footer")