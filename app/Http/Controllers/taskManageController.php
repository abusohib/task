<?php

namespace App\Http\Controllers;

class taskManageController extends Controller {

    public function dashboard(){
        return view('home',[]);
    }
}