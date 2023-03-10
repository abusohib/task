<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request ;
use Illuminate\Support\Facades\View;
use App\Models\task ;


class siteController extends Controller
{
    /**
     * Loads home page 
     */
    public function homePage()
    {
        return view("home",["name"=>"rupom"]);
    }

    //
    public function task()
    {
        return view("welcome");
    }

    public function welcome()
    {
        return view("welcome");
    }

    /**
     * New task controller 
     */
    public function newtask()
    {

        if (View::exists('dashboards.newtask')) 
        {
            return view("dashboards.newtask");
        }   
    }

    public function tasklist()
    {
        if (View::exists('dashboards.tasklist')) {
            $taskAll  = task::allTasks();
            return view::make("dashboards.tasklist")->with("taskAll",$taskAll);
        }
    }

    public function newtasksubmit(Request $ruhul)
    {
          $taksTitle = $ruhul->input('task_title'); 
          $taskId = task::insert($taksTitle,"this is description");
          return redirect()->to('/tasklist')->with('message', 'Thank you for updating your billing information.'); 
    }

    /**
     * Task edit form display 
     */

    public function editTask($taskId)
    {
        $task = task::getTask($taskId);
        return view("dashboards.edit-task-form",["task"=>$task[0]]);
    }

    public function updateTask(Request $request)
    {
            $taskTitle = $request->input("task_title");
            $taskDescripton = $request->input("task_description");
            $taskId = $request->input("taskid");
            $status= task::updateTask($taskId,$taskTitle,$taskDescripton);
            return redirect()->to('/tasklist')->with('message', 'Thank you for updating your billing information.'); 
    }

    
    public function deleteTask($taskId)
    {
         $deleted = task::deleteTask($taskId);
         if($deleted)
         {
            return redirect()->to('/tasklist')->with('message', 'Thank you for updating your billing information.'); 
         }
    }

  
}
