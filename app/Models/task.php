<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class task extends Model
{
    //use HasFactory;

    public static function insert($taskTitle,$taskDescription)
    {
        DB::insert('insert into task(taskTitle,taskDescription,createDate,taskStatus) values (?, ?,?,?)', [$taskTitle, $taskDescription,now(),1]);
        return DB::getPdo()->lastInsertId();
    }
    
    /**
     * All tasks list
     * @return array()
     */

    public static function allTasks()
    {
         return DB::select('select * from task');
    }

}
