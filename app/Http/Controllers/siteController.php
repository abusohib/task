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
            return view("dashboards.tasklist");
        }
    }

    public function newtasksubmit(Request $ruhul)
    {
          $taksTitle = $ruhul->input('task_title'); 
          $taskId = task::insert($taksTitle,"this is description");
          return redirect()->to('/tasklist')->with('message', 'Thank you for updating your billing information.'); 
    }

  
}
